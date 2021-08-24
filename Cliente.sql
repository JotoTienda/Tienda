use frutas;
select clientes.Nom_Cli, clientes.Email_Cli, clientes.Tel_Cli, clientes.Dir_Cli ,clientes.Id_clientes,Cod_Cli, login.Ape_id, login.Nom_id
from clientes, login 
where  clientes.Id_clientes=login.Id_clientes;