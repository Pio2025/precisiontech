<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('pages/contact');
    }

    public function send()
    {
        // Honeypot: bots fill hidden fields humans never see.
        if (trim((string) $this->request->getPost('website')) !== '') {
            return redirect()->to(site_url('contact'))
                ->with('success', 'Thanks for reaching out! We\'ll be in touch shortly.');
        }

        $rules = [
            'name'    => 'required|min_length[2]|max_length[120]',
            'email'   => 'required|valid_email',
            'phone'   => 'permit_empty|max_length[30]',
            'subject' => 'required|min_length[3]|max_length[150]',
            'message' => 'required|min_length[10]|max_length[3000]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to(site_url('contact'))
                ->withInput()
                ->with('errors', $this->validator->getErrors())
                ->with('error', 'Please check the highlighted fields and try again.');
        }

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        try {
            $emailService = service('email');
            $emailService->setTo('info@precisiontech.com.fj');
            $emailService->setFrom($data['email'], $data['name']);
            $emailService->setSubject('Website Enquiry: ' . $data['subject']);
            $emailService->setMessage(
                "Name: {$data['name']}\n" .
                "Email: {$data['email']}\n" .
                "Phone: {$data['phone']}\n\n" .
                "Message:\n{$data['message']}"
            );
            $emailService->send();
        } catch (\Throwable $e) {
            log_message('error', 'Contact form email failed: ' . $e->getMessage());
        }

        return redirect()->to(site_url('contact'))
            ->with('success', 'Thanks for reaching out, ' . esc($data['name']) . '! We\'ll be in touch shortly.');
    }
}
