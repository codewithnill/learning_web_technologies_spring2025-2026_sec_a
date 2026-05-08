USE webtech;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100),
    email VARCHAR(100)
);

-- Basic insert statements
INSERT INTO users (username, password, email) 
VALUES ('john_doe', 'pass123', 'john@example.com');

INSERT INTO users (username, password, email) 
VALUES ('jane_smith', 'secure456', 'jane@example.com');

INSERT INTO users (username, password, email) 
VALUES ('bob_wilson', 'bobpass789', 'bob@example.com');

-- Multiple rows in single insert
INSERT INTO users (username, password, email) VALUES 
('alice_johnson', 'alice123', 'alice@example.com'),
('charlie_brown', 'charlie456', 'charlie@example.com'),
('diana_prince', 'wonder789', 'diana@example.com'),
('eve_adams', 'evepass321', 'eve@example.com'),
('frank_castle', 'punisher654', 'frank@example.com');

-- Insert with different email domains
INSERT INTO users (username, password, email) VALUES 
('tech_guru', 'tech123', 'guru@techmail.com'),
('designer_gal', 'design456', 'designer@gmail.com'),
('coder_ninja', 'ninja789', 'ninja@coding.com');

SELECT * FROM users;
DROP TABLE users;