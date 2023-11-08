CREATE DATABASE IF NOT EXISTS your_database_name;

USE your_database_name;

CREATE TABLE job_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    resume_path VARCHAR(255) NOT NULL
);
