# MS SQL Server Container

## Using Docker Compose

Copy `docker/sqlsrv/compose.sqlsrv.yml` to `compose.override.yml` and bring containers up.

## Pull and run container manually

1. Pull container image:

`docker pull mcr.microsoft.com/mssql/server:2025-latest`


2. Run the container:

```
docker run -e "ACCEPT_EULA=Y" -e "MSSQL_SA_PASSWORD=P@ssw0rd" \
   -p 1433:1433 --name sql1 --hostname sql1 \
   -d -v ${PWD}:/app \
   mcr.microsoft.com/mssql/server:2022-latest

```

## Using SQLCMD

Running SQL queries can be done by connecting MS SQL Studio to the container instance or - better for developers and IT automation - by using `sqlcmd` CLI tool.

Inside the container `sqlcmd` is available at `/opt/mssql-tools18/bin`.

To execute an SQL script inside the container using `sqlcmd`:

`docker exec sql1 bash -c "/opt/mssql-tools18/bin/sqlcmd -S localhost -U sa -P 'P@ssw0rd' -No -i script.sql"`

## References

- https://learn.microsoft.com/en-us/sql/linux/sql-server-linux-docker-container-deployment?view=sql-server-2017&pivots=cs1-bash
- https://learn.microsoft.com/en-us/sql/tools/sqlcmd/sqlcmd-utility?view=sql-server-ver17&tabs=go%2Cwindows-support&pivots=cs1-bash
