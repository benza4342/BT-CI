<?php

//field
$email = 'อีเมลล์';
$password = 'รหัสผ่าน';
$passwordconfirm = 'ยืนยันรหัสผ่าน';
//msg
$required = 'กรุณากรอก';
$isunique = 'นี้มีผู้ใช้แล้ว';
$minlenght = 'อย่างน้อย';
$notmatch = 'รหัสผ่านไม่ตรงกัน';
$config = [
    'login' => [
            ['field' => 'email', 'label' => $email, 'rules' => 'trim|required',
            'errors' => [
                'required' => $required . ' {field}'
            ]
        ],
            ['field' => 'password', 'label' => $password, 'rules' => 'trim|required',
            'errors' => [
                'required' => $required . ' {field}'
            ]
        ]
    ],
    'register' => [
            ['field' => 'email', 'label' => $email, 'rules' => 'trim|required|is_unique[users.email]',
            'errors' =>
                [
                'required' => $required . ' {field}',
                'is_unique' => '{field}' . $isunique
            ]
        ],
            ['field' => 'password', 'label' => $password, 'rules' => 'trim|required|min_length[6]|matches[passwordconf]',
            'errors' => [
                'required' => $required . ' {field}',
                'min_length' => ' {field}' . $minlenght . '{param} ตัว',
                'matches' => $notmatch
            ]
        ],
            ['field' => 'passwordconf', 'label' => $passwordconfirm, 'rules' => 'trim|required',
            'errors' => [
                'required' => $required . ' {field}',
            ]
        ],
    ]
];
//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
//$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[passwordconf]');
//$this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required');
