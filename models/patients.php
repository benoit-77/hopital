<?php

require_once(__DIR__ . "/../database/pdo.php");


class Patient {

    public int $id;
    public string $lastname;
    public string $firstname;
    public string $birthdate;
    public ?string $phone;
    public string $mail;
    public ?Appointment $appointment;

    public function displayDate(): string {
        $birthdate = new DateTime($this->birthdate);
        return $birthdate->format("d/m/Y");
    }

    public static function create(string $lastname, string $firstname, string $birthdate, ?string $phone, string $mail): void {
        global $pdo; 

        $sql = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)";

        $statement = $pdo->prepare($sql);
        $statement->bindParam(":lastname", $lastname, PDO::PARAM_STR);
        $statement->bindParam(":firstname", $firstname, PDO::PARAM_STR);
        $statement->bindParam(":birthdate", $birthdate, PDO::PARAM_STR);
        $statement->bindParam(":phone", $phone, PDO::PARAM_STR);
        $statement->bindParam(":mail", $mail, PDO::PARAM_STR);
        $statement->execute();
    }

    public static function readAll(int $offset = 0, int $nb = 10) : array {
        global $pdo; 
    
        $sql = "SELECT id, lastname, firstname, birthdate, phone, mail 
            FROM patients 
            LIMIT :offset, :nb";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":offset", $offset, PDO::PARAM_INT);
        $statement->bindParam(":nb", $nb, PDO::PARAM_INT);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Patient");
        $patients = $statement->fetchAll();
        return $patients;
    }

    public static function count(): int {
        global $pdo;

        $sql = "SELECT COUNT(*) AS nb_patients FROM patients";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetch();

        $nbPatients = $result["nb_patients"];

        return $nbPatients;
    }


    public static function readOne(int $id) : Patient|false {
        global $pdo; 
    
        $sql = "SELECT id, lastname, firstname, birthdate, phone, mail FROM patients WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Patient");
        $patients = $statement->fetch();

        if($patients == false)  {
            return false;
        } else {
            return $patients;   
        }
    }

    public static function update(int $id, string $lastname, string $firstname, string $birthdate, ?string $phone, string $mail): void {
        global $pdo;

        $sql = "UPDATE patients
        SET lastname = :lastname, 
        firstname = :firstname, 
        birthdate = :birthdate,
        phone = :phone,
        mail = :mail
        WHERE id = :id";

        $statement = $pdo->prepare($sql);
        $statement->bindParam(":lastname", $lastname, PDO::PARAM_STR);
        $statement->bindParam(":firstname", $firstname, PDO::PARAM_STR);
        $statement->bindParam(":birthdate", $birthdate, PDO::PARAM_STR);
        $statement->bindParam(":phone", $phone, PDO::PARAM_STR);
        $statement->bindParam(":mail", $mail, PDO::PARAM_STR);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function delete(int $id) {
        global $pdo; 
    
        $sql = "DELETE FROM patients WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public static function patientSearch(): array {
        global $pdo; 
        $patientSearch = '%' . $_GET["patientSearch"] . '%';
    
        $sql = "SELECT id, lastname, firstname, birthdate, phone, mail FROM patients WHERE lastname LIKE :patientSearch OR firstname LIKE :patientSearch";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":patientSearch", $patientSearch, PDO::PARAM_STR);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Patient");
        $patients = $statement->fetchAll();
        return $patients;
    }
}