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

-- Add all the Hashiras to the 'admins' table
INSERT INTO `admins` (`username`, `email`, `role`, `password`,) VALUES
('Giyu Tomioka', 'giyu@hashira.com', 'Trainer', 'waterbreathing', 'giyu.png'),
('Mitsuri Kanroji', 'mitsuri@hashira.com', 'Trainer', 'lovebreathing', 'mitsuri.png'),
('Obanai Iguro', 'obanai@hashira.com', 'Trainer', 'serpentbreathing', 'obanai.png'),
('Sanemi Shinazugawa', 'sanemi@hashira.com', 'Trainer', 'windbreathing', 'sanemi.png'),
('Gyomei Himejima', 'gyomei@hashira.com', 'Senior Trainer', 'stonebreathing', 'gyomei.png'),
('Kyojuro Rengoku', 'kyojuro@hashira.com', 'Trainer', 'flamebreathing', 'rengoku.png'),
('Tengen Uzui', 'tengen@hashira.com', 'Trainer', 'soundbreathing', 'tengen.png'),
('Muichiro Tokito', 'muichiro@hashira.com', 'Trainer', 'mistbreathing', 'muichiro.png'),
('Shinobu Kocho', 'shinobu@hashira.com', 'Trainer', 'insectbreathing', 'shinobu.png');

-- Add notable Demons to the 'users' (members) table
INSERT INTO `users` (`username`, `email`, `password`) VALUES
('Muzan Kibutsuji', 'muzan@demons.com', 'demonking'),
('Kokushibo', 'kokushibo@uppermoon.com', 'moonbreathing'),
('Doma', 'doma@uppermoon.com', 'icepowers'),
('Akaza', 'akaza@uppermoon.com', 'destructivedeath'),
('Hantengu', 'hantengu@uppermoon.com', 'emotionmanifestation'),
('Gyokko', 'gyokko@uppermoon.com', 'porcelainvases'),
('Gyutaro', 'gyutaro@uppermoon.com', 'bloodblades'),
('Daki', 'daki@uppermoon.com', 'obislash'),
('Kaigaku', 'kaigaku@uppermoon.com', 'thunderbreathing'),
('Enmu', 'enmu@lowermoon.com', 'forcedreams'),
('Rui', 'rui@lowermoon.com', 'spiderfamily'),
('Yahaba', 'yahaba@demons.com', 'koketsubarrows'),
('Susamaru', 'susamaru@demons.com', 'temariballs');