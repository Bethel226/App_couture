/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  31/05/2022 15:33:05                      */
/*==============================================================*/


drop table if exists Client;

drop table if exists Mesure;

drop table if exists Modele;

drop table if exists Paiement;

drop table if exists Utilisateur;

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   id                   int not null,
   Nom                  varchar(254),
   Prenom               varchar(254),
   Telephone            int,
   Adresse              varchar(254),
   Email                varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : Mesure                                               */
/*==============================================================*/
create table Mesure
(
   id                   int not null,
   Cli_id               int not null,
   Epaule               float,
   Manche               float,
   Hauteur_taille       float,
   Cuisse               float,
   Tour_poitrine        float,
   Hanche               float,
   Hauteur_poitrine     float,
   Tour_bras            float,
   Tour_poignet         float,
   Longueur_bras        float,
   Tour_taille          float,
   Interieur_jambe      float,
   primary key (id)
);

/*==============================================================*/
/* Table : Modele                                               */
/*==============================================================*/
create table Modele
(
   id                   int not null,
   Nom                  varchar(254),
   Prix                 float,
   Photo                varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : Paiement                                             */
/*==============================================================*/
create table Paiement
(
   id                   int not null,
   Cli_id               int not null,
   Mod_id               int not null,
   Total                float,
   Avance               float,
   Reste                float,
   primary key (id)
);

/*==============================================================*/
/* Table : Utilisateur                                          */
/*==============================================================*/
create table Utilisateur
(
   id                   int not null,
   Nom                  varchar(254),
   Email                varchar(254),
   Password             varchar(254),
   primary key (id)
);

alter table Mesure add constraint FK_Association_5 foreign key (Cli_id)
      references Client (id) on delete restrict on update restrict;

alter table Paiement add constraint FK_Association_3 foreign key (Mod_id)
      references Modele (id) on delete restrict on update restrict;

alter table Paiement add constraint FK_Association_6 foreign key (Cli_id)
      references Client (id) on delete restrict on update restrict;

