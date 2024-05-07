<?php
    class User {
        private $id;
        private $name;
        private $email;
        private $email_verified_at;
        private $password;
        private $two_factor_secret;
        private $two_factor_recovery_codes;
        private $remember_token;
        private $current_team_id;
        private $profile_photo_path;
        private $created_at;
        private $updated_at;
    
        public function getId() {
            return $this->id;
        }

        public function setId($id){
            return $this->id = $id;
        }
    
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            return $this->name = $name;
        }
    
        public function setEmail($emial) {
            return $this->email = $emial;
        }

        public function getEmail() {
            return $this->email;
        }
    
        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            return $this->password = $password;
        }
    
        // Métodos getters e setters para outras propriedades, se necessário
    }
    