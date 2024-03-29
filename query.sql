create database web_registration_contact;
use web_registration_contact;

insert into users (username, email, sex, birthday, password, created_at, updated_at)
values
('marionorberto', 'marionorberto2018@gmail.com', 'M', '2000-07-24', '1234', now(), now()),
('mariajosefa', 'mariajosefa@gmail.com', 'F', '1984-03-10', '1234', now(), now()),
('helderfrancisco', 'helderfranciscogamer@gmail.com', 'M', '1995-09-10', '1234', now(), now()),
('pauloalexandre', 'pauloalexandre@gmail.com', 'M', '2001-03-22', '1234', now(), now()),
('elisangelafernandes', 'elisangelafernandes@gmail.com', 'F', '2000-07-24', '1234', now(), now()),
('elvinajoao', 'elvinajoao@gmail.com', 'F', '1990-03-11', '1234', now(), now());

insert into contacts (name, nickname, email, web_address, note, emergency_contact, created_at, updated_at)
values
('Eliana Cipriana', 'Lukenny', NULL, NULL, 'PROGRAMADOR DE SUCESSO', true, now(), now()),
('Maria Fernandes', 'Gingongo', NULL, NULL, NULL, true, now(), now()),
('Analticia Alexandre', NULL, NULL, NULL, 'DECORADORA PROFISSIONAL', true, now(), now()),
('Eduardo Miranda', NULL, NULL, NULL, 'ARQUITECTO', false, now(), now()),
('Paulo Alexandre', NULL, NULL, NULL, NULL, true, now(), now());

update contacts
set email = 'tecnicopaulo@hotmail.com'
where id = 5

select *from contacts

insert into TB_GROUP_CONTACTS (description, created_at, updated_at)
values
('Family', now(), now()),
('Job-parter', now(), now()),
('Friend', now(), now()),
('neighbour', now(), now()),
('Other', now(), now());

insert into TB_PHONE_USERS (phone_number, user_id, created_at, updated_at)
values
('+244-932-900-022',1, now(), now()),
('+244-932-900-022',1, now(), now()),
('+244-932-900-022',2, now(), now()),
('+244-932-900-022',3, now(), now()),
('+244-932-900-022',3, now(), now());

desc contacts
insert into TB_COMPANY_CONTACTS(title, departament, compa, created_at, updated_at)
values
('+244-932-900-022',1, now(), now()),
('+244-932-900-
022',1, now(), now()),
('+244-932-900-022',2, now(), now()),
('+244-932-900-022',3, now(), now()),
('+244-932-900-022',3, now(), now());

desc TB_ADDRESS_CONTACTS

insert into TB_ADDRESS_CONTACTS (neighbourhood, street, country, house_number, contact_id, created_at, updated_at)
values
('cazenga', '33', null, null, 1, now(), now()),
('Namíbia', '33', null, 'Namíbia', 3, now(), now()),
('viana', '33', null, null,  2, now(), now());

SELECT TB_PHONE_CONTACTS.phone_number, TB_CONTACTS.name
from TB_PHONE_CONTACTS
INNER JOIN TB_CONTACTS
on TB_PHONE_CONTACTS.contact_id = TB_CONTACTS.id


add foreign key(contact_id) references TB_CONTACTS(id)

use web_registration_contact

alter table contacts
add column sex char(1)

select *from contacts

truncate table contacts


select *from phone_contacts


alter table phone_contacts
add foreign key (contact_id) references contacts(id) 

insert into phone_contacts (phone_number, contact_id, created_at, updated_at)
values
 ('+244 915-327-990', 6, now(), now()),
 ('+244 926-112-488', 6, now(), now()),
 ('+244 935-236-580', 7, now(), now()),
 ('+244 955-157-930', 9, now(), now()),
 ('+244 911-300-998', 11, now(), now()),
 ('+244 944-123-445', 10, now(), now());


insert into address_contacts (neighbourhood, street, country, house_number, contact_id, created_at, updated_at)
values
 ('cazenga', 'A10', 'angola', '23', 12, now(), now());
 ('cazenga', 'A10', 'angola', '23',6, now(), now()),
 ('cazenga', 'A10', 'angola', '23', 7, now(), now()),
 ('cazenga', 'A10', 'angola', '23', 8, now(), now()),
 ('cazenga', 'A10', 'angola', '23', 9, now(), now());

alter table address_contacts
add constraint unique(contact_id)


select *from contacts;

alter table contacts
add column phone varchar(50);

alter table contacts
add column phone_alternative varchar(50);

alter table contacts
add column address varchar(50);


add column phone varchar(50);

