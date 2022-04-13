-- donner
CREATE TABLE donner (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         full_name VARCHAR(50) NOT NULL,
                         phone_number VARCHAR(10) NOT NULL
);

-- donations
CREATE TABLE donations (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        donner_id INT NOT NULL ,
                        name VARCHAR(50) NOT NULL,
                        type VARCHAR(50) NOT NULL,
                        FOREIGN KEY (donner_id) REFERENCES donner(id)
);