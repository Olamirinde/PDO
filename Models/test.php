<?php

require_once 'Teacher.php';

$teacher = new Teacher();

$teachers_Data = [
['first_name' => 'Babatunde',   'last_name' => 'Fashola',  'gender' => 'Male',   'date_of_birth' => '1982-11-05', 'email' => 'b.fashola@school.edu.ng',  'phone' => '08051234569', 'address' => '7 Trans Amadi Road, Port Harcourt', 'salary' => 820000.00, 'status_id' => 1],
['first_name' => 'Chukwuemeka', 'last_name' => 'Okonkwo',  'gender' => 'Male',   'date_of_birth' => '1985-03-14', 'email' => 'c.okonkwo@school.edu.ng',  'phone' => '08023456781', 'address' => '12 Awolowo Road, Ikoyi, Lagos',          'salary' => 750000.00,  'status_id' => 1],
['first_name' => 'Ngozi',       'last_name' => 'Adeyemi',  'gender' => 'Female', 'date_of_birth' => '1990-07-22', 'email' => 'n.adeyemi@school.edu.ng',  'phone' => '07031234570', 'address' => '3 Ahmadu Bello Way, Kaduna',             'salary' => 680000.00,  'status_id' => 1],
['first_name' => 'Emeka',       'last_name' => 'Eze',      'gender' => 'Male',   'date_of_birth' => '1978-12-01', 'email' => 'e.eze@school.edu.ng',      'phone' => '08161234571', 'address' => '45 Nnamdi Azikiwe Street, Enugu',        'salary' => 910000.00,  'status_id' => 1],
['first_name' => 'Fatima',      'last_name' => 'Musa',     'gender' => 'Female', 'date_of_birth' => '1993-05-18', 'email' => 'f.musa@school.edu.ng',     'phone' => '09021234572', 'address' => '9 Sultan Road, Sokoto',                  'salary' => 620000.00,  'status_id' => 2],
['first_name' => 'Tunde',       'last_name' => 'Bakare',   'gender' => 'Male',   'date_of_birth' => '1980-09-30', 'email' => 't.bakare@school.edu.ng',   'phone' => '08091234573', 'address' => '18 Ring Road, Ibadan',                   'salary' => 870000.00,  'status_id' => 1],
['first_name' => 'Amina',       'last_name' => 'Yusuf',    'gender' => 'Female', 'date_of_birth' => '1995-02-11', 'email' => 'a.yusuf@school.edu.ng',    'phone' => '07061234574', 'address' => '22 Shehu Shagari Way, Abuja',            'salary' => 590000.00,  'status_id' => 1],
['first_name' => 'Oluwaseun',   'last_name' => 'Afolabi',  'gender' => 'Male',   'date_of_birth' => '1988-06-25', 'email' => 'o.afolabi@school.edu.ng',  'phone' => '08031234575', 'address' => '5 Obafemi Awolowo Avenue, Osogbo',       'salary' => 730000.00,  'status_id' => 1],
['first_name' => 'Chidinma',    'last_name' => 'Obiora',   'gender' => 'Female', 'date_of_birth' => '1992-10-08', 'email' => 'c.obiora@school.edu.ng',   'phone' => '08121234576', 'address' => '31 Owerri Road, Aba',                    'salary' => 660000.00,  'status_id' => 2],
['first_name' => 'Segun',       'last_name' => 'Oduola',   'gender' => 'Male',   'date_of_birth' => '1975-04-17', 'email' => 's.oduola@school.edu.ng',   'phone' => '09051234577', 'address' => '8 Lekki-Epe Expressway, Lagos',          'salary' => 980000.00,  'status_id' => 1],
['first_name' => 'Halima',      'last_name' => 'Ibrahim',  'gender' => 'Female', 'date_of_birth' => '1989-08-03', 'email' => 'h.ibrahim@school.edu.ng',  'phone' => '08071234578', 'address' => '14 Kano Road, Zaria',                    'salary' => 710000.00,  'status_id' => 1],
['first_name' => 'Ifeanyi',     'last_name' => 'Okeke',    'gender' => 'Male',   'date_of_birth' => '1983-01-29', 'email' => 'i.okeke@school.edu.ng',    'phone' => '08011234579', 'address' => '6 Onitsha Road, Awka',                   'salary' => 800000.00,  'status_id' => 1],
['first_name' => 'Blessing',    'last_name' => 'Effiong',  'gender' => 'Female', 'date_of_birth' => '1997-11-14', 'email' => 'b.effiong@school.edu.ng',  'phone' => '07011234580', 'address' => '27 Calabar Road, Uyo',                   'salary' => 540000.00,  'status_id' => 1],
['first_name' => 'Rotimi',      'last_name' => 'Adebayo',  'gender' => 'Male',   'date_of_birth' => '1977-07-07', 'email' => 'r.adebayo@school.edu.ng',  'phone' => '08151234581', 'address' => '2 Abeokuta Expressway, Abeokuta',        'salary' => 1050000.00, 'status_id' => 1],
['first_name' => 'Nkechi',      'last_name' => 'Nwachukwu','gender' => 'Female', 'date_of_birth' => '1991-03-26', 'email' => 'n.nwachukwu@school.edu.ng','phone' => '08181234582', 'address' => '19 Port Harcourt Road, Owerri',          'salary' => 690000.00,  'status_id' => 2],
['first_name' => 'Danladi',     'last_name' => 'Garba',    'gender' => 'Male',   'date_of_birth' => '1986-09-12', 'email' => 'd.garba@school.edu.ng',    'phone' => '09031234583', 'address' => '33 Jos Road, Bauchi',                    'salary' => 760000.00,  'status_id' => 1],
['first_name' => 'Adaeze',      'last_name' => 'Obi',      'gender' => 'Female', 'date_of_birth' => '1994-06-19', 'email' => 'a.obi@school.edu.ng',      'phone' => '08041234584', 'address' => '10 Asaba Road, Agbor',                   'salary' => 630000.00,  'status_id' => 1],
['first_name' => 'Kayode',      'last_name' => 'Owolabi',  'gender' => 'Male',   'date_of_birth' => '1979-12-23', 'email' => 'k.owolabi@school.edu.ng',  'phone' => '08101234585', 'address' => '4 Ijebu-Ode Road, Sagamu',               'salary' => 890000.00,  'status_id' => 1],
['first_name' => 'Zainab',      'last_name' => 'Abdullahi','gender' => 'Female', 'date_of_birth' => '1996-04-05', 'email' => 'z.abdullahi@school.edu.ng','phone' => '07091234586', 'address' => '16 Maiduguri Road, Damaturu',            'salary' => 570000.00,  'status_id' => 2],
['first_name' => 'Chidi',       'last_name' => 'Nwosu',    'gender' => 'Male',   'date_of_birth' => '1984-08-16', 'email' => 'c.nwosu@school.edu.ng',    'phone' => '08061234587', 'address' => '21 Ikwerre Road, Rumuola, Port Harcourt', 'salary' => 840000.00,  'status_id' => 1],
['first_name' => 'Toyin',       'last_name' => 'Adeleke',  'gender' => 'Female', 'date_of_birth' => '1987-02-28', 'email' => 't.adeleke@school.edu.ng',  'phone' => '08131234588', 'address' => '38 Ife Road, Ile-Ife',                   'salary' => 720000.00,  'status_id' => 1],
   
];


// foreach ($teachers_Data as $teacherData) {

//     $created = $teacher->createTeachers($teacherData);

//     if ($created) {
//         echo "Teacher added successfully <br>";
//     } else {
//         echo "Failed to add teacher <br>";
//     }
// }


$data = $teacher->getAllTeachers(1, 10);
print_r($data);

// $teacher = new Teacher();
// $teacher->getAllTeachers();
// $allTeachers = $teachers->getAllTeachers();
// print_r($allTeachers);


// $oneTeacher = $teachers->getOneTeacher(2);
// print_r($oneTeacher);





