USE webtech;

DROP TABLE users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO users (username, password, email) VALUES 
('john_doe', 'pass123', 'john@example.com'),
('jane_smith', 'secure456', 'jane@example.com'),
('bob_wilson', 'bobpass789', 'bob@example.com'),
('alice_johnson', 'alice123', 'alice@example.com'),
('charlie_brown', 'charlie456', 'charlie@example.com');

INSERT INTO users (username, password, email) VALUES 
('emma_davis', 'emma789', 'emma@example.com'),
('michael_clark', 'mike321', 'michael@example.com'),
('sarah_miller', 'sarah654', 'sarah@example.com'),
('david_wilson', 'david987', 'david@example.com'),
('lisa_anderson', 'lisa147', 'lisa@example.com');

SELECT * FROM users;
