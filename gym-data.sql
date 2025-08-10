CREATE TABLE users (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    auth_token VARCHAR(255) NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admins (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    role VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    auth_token VARCHAR(255) NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO `admins` (`username`, `email`, `role`, `password`) VALUES
('Kyojuro Rengoku', 'rengoku@hashira.com', 'Senior Trainer', 'flamebreathing'),
('Giyu Tomioka', 'giyu@hashira.com', 'Trainer', 'waterbreathing'),
('Tengen Uzui', 'tengen@hashira.com', 'Trainer', 'soundbreathing'),
('Shinobu Kocho', 'shinobu@hashira.com', 'Trainer', 'insectbreathing'),
('Gyomei Himejima', 'gyomei@hashira.com', 'Senior Trainer', 'stonebreathing');


INSERT INTO `users` (`username`, `email`, `password`) VALUES
('Kokushibo', 'kokushibo@uppermoon.com', 'moonbreathing'),
('Doma', 'doma@uppermoon.com', 'icepowers'),
('Akaza', 'akaza@uppermoon.com', 'destructivedeath'),
('Hantengu', 'hantengu@uppermoon.com', 'emotionmanifestation'),
('Gyokko', 'gyokko@uppermoon.com', 'porcelainvases');