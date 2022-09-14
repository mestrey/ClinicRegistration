<?php

namespace App\Models;

class Clinic
{
    public function __construct(
        public string $city,
        public string $name,
        public string $inn,
        public string $adress,
        public string $phone,
        public string $email,
        public string $site,
        public string $contactName,
        public string $contactPosition,
        public string $contactPhone,
        public string $contactEmail,
    ) {
    }
}
