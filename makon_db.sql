/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/29/2016 12:25:47 AM                       */
/*==============================================================*/


drop table if exists DETAIL_KEUANGAN;

drop table if exists DETAIL_TUGAS;

drop table if exists TBL_KEUANGAN;

drop table if exists TBL_TUGAS;

drop table if exists TBL_USER;

/*==============================================================*/
/* Table: DETAIL_KEUANGAN                                       */
/*==============================================================*/
create table DETAIL_KEUANGAN
(
   ID_KEUANGAN          int not null,
   ID_USER              int not null,
   DETAIL_KEUANGAN      varchar(250),
   primary key (ID_KEUANGAN, ID_USER)
);

/*==============================================================*/
/* Table: DETAIL_TUGAS                                          */
/*==============================================================*/
create table DETAIL_TUGAS
(
   ID_TUGAS             int not null,
   ID_USER              int not null,
   DETAIL_TUGAS         varchar(250),
   primary key (ID_TUGAS, ID_USER)
);

/*==============================================================*/
/* Table: TBL_KEUANGAN                                          */
/*==============================================================*/
create table TBL_KEUANGAN
(
   ID_KEUANGAN          int not null,
   JENIS_KEUANGAN       varchar(15),
   BIAYA                bigint,
   TBL                  date,
   primary key (ID_KEUANGAN)
);

/*==============================================================*/
/* Table: TBL_TUGAS                                             */
/*==============================================================*/
create table TBL_TUGAS
(
   ID_TUGAS             int not null,
   HARI_TUGAS           varchar(10),
   TUGAS                varchar(250),
   primary key (ID_TUGAS)
);

/*==============================================================*/
/* Table: TBL_USER                                              */
/*==============================================================*/
create table TBL_USER
(
   ID_USER              int not null,
   NAMA_USER            varchar(250),
   EMAIL_USER           varchar(100),
   PASSWORD_USER        varchar(250),
   HAKAKSES_USER        varchar(10),
   primary key (ID_USER)
);

alter table DETAIL_KEUANGAN add constraint FK_DETAIL_KEUANGAN foreign key (ID_KEUANGAN)
      references TBL_KEUANGAN (ID_KEUANGAN) on delete cascade on update cascade;

alter table DETAIL_KEUANGAN add constraint FK_DETAIL_KEUANGAN2 foreign key (ID_USER)
      references TBL_USER (ID_USER) on delete cascade on update cascade;

alter table DETAIL_TUGAS add constraint FK_DETAIL_TUGAS foreign key (ID_TUGAS)
      references TBL_TUGAS (ID_TUGAS) on delete cascade on update cascade;

alter table DETAIL_TUGAS add constraint FK_DETAIL_TUGAS2 foreign key (ID_USER)
      references TBL_USER (ID_USER) on delete cascade on update cascade;

