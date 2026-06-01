CREATE TABLE sety (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazev VARCHAR(255) NOT NULL,
    cena DECIMAL(10, 2) NOT NULL,
    popisek TEXT,
    foto_url VARCHAR(500)
);

INSERT INTO sety (nazev, cena, popisek, foto_url) VALUES
('Millennium Falcon (UCS)', 20999.00, 'Ikonická loď ze Star Wars s více než 7500 dílky.', 'falcon_ucs.jpg'),
('Hrad Bradavice', 10999.00, 'Detailní model bradavického hradu z Harryho Pottera.', 'bradavice.jpg'),
('LEGO Technic Bugatti Chiron', 8499.00, 'Realistický model supersportu v měřítku 1:8.', 'bugatti.jpg'),
('LEGO Icons Květinová kytice', 1299.00, 'Krásná dekorace, která nikdy nezvadne.', 'kytice.jpg'),
('LEGO Ideas Středověká kovárna', 4299.00, 'Nostalgický model kovárny s propracovaným interiérem.', 'kovarna.jpg'),
('LEGO City Policejní stanice', 1499.00, 'Klasický set pro ochranu pořádku ve tvém městě.', 'policie.jpg'),
('LEGO Creator Expert Koloseum', 13499.00, 'Jeden z největších LEGO modelů historie.', 'koloseum.jpg'),
('LEGO Ninjago Zahrady v NINJAGO City', 7999.00, 'Třípatrový model plný detailů a minifigurek.', 'ninjago_zahrady.jpg'),
('LEGO Star Wars AT-AT', 19999.00, 'Obří kráčející kolos z bitvy o planetu Hoth.', 'atat.jpg'),
('LEGO Technic NASA Mars Rover Perseverance', 2299.00, 'Vzdělávací model vesmírného vozítka.', 'rover.jpg'),
('LEGO Architecture Bílý dům', 2499.00, 'Elegantní model sídla amerického prezidenta.', 'white_house.jpg'),
('LEGO Friends Letní aquapark', 1899.00, 'Zábavný set pro milovníky vodních radovánek.', 'aquapark.jpg'),
('LEGO Super Mario Startovací set', 1199.00, 'Interaktivní figurka Maria a první úroveň.', 'mario_start.jpg'),
('LEGO Icons Titanic', 16999.00, 'Věrná replika legendárního zaoceánského parníku.', 'titanic.jpg'),
('LEGO Speed Champions Ferrari F8 Tributo', 499.00, 'Rychlé auto pro malé i velké závodníky.', 'ferrari.jpg');