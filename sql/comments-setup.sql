DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`
(
    `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `poster` VARCHAR(40) NOT NULL,
    `datetime` DATETIME,
    `content` VARCHAR(400)
);

DELETE FROM `comments`;
INSERT INTO `comments` (`poster`, `content`) VALUES
('Simon', 'Hej jag heter Simon.'),
('Kalle', 'Jag gillar bord.')
;
