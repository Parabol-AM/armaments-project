-- ======================
-- TABLE CLIENT
-- ======================
CREATE TABLE Client (
    id_client INT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    telephone VARCHAR(20)
);

-- ======================
-- TABLE PRODUIT
-- ======================
CREATE TABLE Produit (
    id_produit INT PRIMARY KEY,
    nom_produit VARCHAR(150),
    prix DECIMAL(10,2)
);

-- ======================
-- TABLE PANIER
-- ======================
CREATE TABLE Panier (
    id_panier INT KEY,
    id_client INT,
    FOREIGN KEY (id_client) REFERENCES Client(id_client)
);

-- ======================
-- TABLE LIGNE PANIER
-- ======================
CREATE TABLE Ligne_panier (
    id_ligne INT PRIMARY KEY,
    id_panier INT,
    id_produit INT,
    quantite INT,
    FOREIGN KEY (id_panier) REFERENCES Panier(id_panier),
    FOREIGN KEY (id_produit) REFERENCES Produit(id_produit)
);