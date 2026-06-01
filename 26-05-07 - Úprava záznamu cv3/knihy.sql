CREATE TABLE knihy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazev VARCHAR(255),
    autor VARCHAR(300),
    popis TEXT
);

INSERT INTO knihy (nazev, autor, popis) VALUES
('Sto roků samoty', 'Gabriel García Márquez', 'Příběh rodu Buendíů na pozadí magického realismu, zahrnující sedm generací v zapadlé vesnici Macondo.'),
('Velký Gatsby', 'F. Scott Fitzgerald', 'Tragický příběh amerického snu a neopětované lásky Jaye Gatsbyho k Daisy Buchananové.'),
('Malý princ', 'Antoine de Saint-Exupéry', 'Filozofická pohádka o přátelství, lásce a zodpovědnosti, vyprávěná malým chlapcem.'),
('Hobit aneb Cesta tam a zase zpátky', 'J.R.R. Tolkien', 'Dobrodružná výprava Bilba Pytlíka a skupiny trpaslíků za pokladem, který střeží drak Šmak.'),
('Farma zvířat', 'George Orwell', 'Sžíravá alegorie o revoluci a totalitě, kde zvířata převezmou moc na farmě.'),
('Jméno růže', 'Umberto Eco', 'Detektivní příběh zasazený do italského kláštera ve 14. století, propletený s filozofií a teologií.'),
('451 stupňů Fahrenheita', 'Ray Bradbury', 'Dystopický román o společnosti, kde jsou knihy zakázány a páleny.'),
('Na západní frontě klid', 'Erich Maria Remarque', 'Příběh z pohledu mladého německého vojáka o hrůzách a brutalitě první světové války.'),
('Proměna', 'Franz Kafka', 'Povídka o obchodním cestujícím Řehořovi Samsovi, který se jednoho rána promění v obří hmyz.'),
('Duna', 'Frank Herbert', 'Epická sci-fi sága o boji o moc nad pouštní planetou Arrakis, jediným zdrojem koření melanže.'),
('Válka s mloky', 'Karel Čapek', 'Varování před zneužitím vědy a kritikou civilizace, vyjádřené skrze objevení inteligentních mloků.'),
('Babička', 'Božena Němcová', 'Idylický obraz venkovského života a vzpomínky na dětství prožité v Ratibořickém údolí.'),
('Kmotr', 'Mario Puzo', 'Příběh newyorské mafiánské rodiny Corleonových, zaměřený na Dona Vita Corleoneho.'),
('Zločin a trest', 'Fjodor Dostojevskij', 'Psychologický román o studentovi Raskolnikovovi a jeho teoriích o nadčlověku.'),
('Pýcha a předsudek', 'Jane Austen', 'Romantický román o lásce a společenských konvencích v Anglii na přelomu 18. a 19. století.')
;