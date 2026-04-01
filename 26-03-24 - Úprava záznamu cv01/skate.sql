CREATE TABLE skate (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    znacka TEXT,       
    model TEXT,                        
    typ TEXT                          
);

INSERT INTO skate (znacka, model, typ) VALUES
('Element', 'Flourish', 'Street'),
('Santa Cruz', 'Screaming Hand', 'Street'),
('Globe', 'Pinner Evo', 'Longboard'),
('Mindless', 'Wrecker V2', 'Cruiser'),
('Plan B', 'Team OG', 'Street'),
('Zero', 'Single Skull', 'Street'),
('Arbor', 'Pilsner Photo', 'Cruiser'),
('Sector 9', 'Fault Line', 'Longboard'),
('Jart', 'Classic Deck', 'Street'),
('Enuff', 'Decade Pro', 'Street');