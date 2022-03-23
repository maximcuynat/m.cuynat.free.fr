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
        Mail      Varchar (50) NOT NULL ,
        Notif     Bool NOT NULL
        ,CONSTRAINT User_PK PRIMARY KEY (ID_person)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Dates
#------------------------------------------------------------

CREATE TABLE Dates(
        Dates Date NOT NULL
        ,CONSTRAINT Dates_PK PRIMARY KEY (Dates)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Themes
#------------------------------------------------------------

CREATE TABLE Themes(
        Theme Varchar (50) NOT NULL
        ,CONSTRAINT Themes_PK PRIMARY KEY (Theme)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        ID_Article Int  Auto_increment  NOT NULL ,
        Titre      Varchar (50) NOT NULL ,
        Contenu    Text NOT NULL ,
        ID_person  Int NOT NULL ,
        Dates      Date NOT NULL ,
        Theme      Varchar (50) NOT NULL
        ,CONSTRAINT Article_PK PRIMARY KEY (ID_Article)

        ,CONSTRAINT Article_User_FK FOREIGN KEY (ID_person) REFERENCES User(ID_person)
        ,CONSTRAINT Article_Dates0_FK FOREIGN KEY (Dates) REFERENCES Dates(Dates)
        ,CONSTRAINT Article_Themes1_FK FOREIGN KEY (Theme) REFERENCES Themes(Theme)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaire
#------------------------------------------------------------

CREATE TABLE Commentaire(
        ID_Commentaire             Int  Auto_increment  NOT NULL ,
        Auteur                     Varchar (50) NOT NULL ,
        Commentaire                Text NOT NULL ,
        CommentaireDatePublication Varchar (50) NOT NULL ,
        ID_Article                 Int NOT NULL ,
        Dates                      Date NOT NULL ,
        ID_person                  Int NOT NULL
        ,CONSTRAINT Commentaire_PK PRIMARY KEY (ID_Commentaire)

        ,CONSTRAINT Commentaire_Article_FK FOREIGN KEY (ID_Article) REFERENCES Article(ID_Article)
        ,CONSTRAINT Commentaire_Dates0_FK FOREIGN KEY (Dates) REFERENCES Dates(Dates)
        ,CONSTRAINT Commentaire_User1_FK FOREIGN KEY (ID_person) REFERENCES User(ID_person)
)ENGINE=InnoDB;

