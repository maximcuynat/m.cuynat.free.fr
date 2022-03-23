#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        ID_person Int  Auto_increment  NOT NULL ,
        Username  Varchar (50) NOT NULL ,
        Password  Varchar (50) NOT NULL ,
        Mail      Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (ID_person)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        ID_Article             Int  Auto_increment  NOT NULL ,
        Titre                  Varchar (50) NOT NULL ,
        Theme                  Varchar (50) NOT NULL ,
        Contenu                Text NOT NULL ,
        ArticleDatePublication Char NOT NULL ,
        ID_person              Int NOT NULL
	,CONSTRAINT Article_PK PRIMARY KEY (ID_Article)

	,CONSTRAINT Article_User_FK FOREIGN KEY (ID_person) REFERENCES User(ID_person)
	,CONSTRAINT Article_User_AK UNIQUE (ID_person)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaire
#------------------------------------------------------------

CREATE TABLE Commentaire(
        ID_Commentaire             Int  Auto_increment  NOT NULL ,
        Auteur                     Varchar (50) NOT NULL ,
        Commentaire                Text NOT NULL ,
        CommentaireDatePublication Varchar (50) NOT NULL ,
        ID_Article                 Int NOT NULL
	,CONSTRAINT Commentaire_PK PRIMARY KEY (ID_Commentaire)

	,CONSTRAINT Commentaire_Article_FK FOREIGN KEY (ID_Article) REFERENCES Article(ID_Article)
)ENGINE=InnoDB;

