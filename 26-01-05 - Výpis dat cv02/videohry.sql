CREATE TABLE videohry (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nazev VARCHAR(255),
    zanr VARCHAR(150),
    rok_vydani INT
);

INSERT INTO videohry (nazev, zanr, rok_vydani) VALUES
('The Witcher III', 'RPG', '2015'),
('Minecraft', 'RPG', '2011'),
('GTA V', 'Akční', '2013'),
('League of Legends', 'MOBA', '2009');
