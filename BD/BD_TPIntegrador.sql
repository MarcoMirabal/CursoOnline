USE [master]
GO
/****** Object:  Database [CursoOnline]    Script Date: 17/02/2025 19:50:55 ******/
CREATE DATABASE [CursoOnline]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'CursoOnline', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\CursoOnline.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'CursoOnline_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\CursoOnline_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [CursoOnline] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [CursoOnline].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [CursoOnline] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [CursoOnline] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [CursoOnline] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [CursoOnline] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [CursoOnline] SET ARITHABORT OFF 
GO
ALTER DATABASE [CursoOnline] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [CursoOnline] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [CursoOnline] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [CursoOnline] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [CursoOnline] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [CursoOnline] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [CursoOnline] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [CursoOnline] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [CursoOnline] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [CursoOnline] SET  ENABLE_BROKER 
GO
ALTER DATABASE [CursoOnline] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [CursoOnline] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [CursoOnline] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [CursoOnline] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [CursoOnline] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [CursoOnline] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [CursoOnline] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [CursoOnline] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [CursoOnline] SET  MULTI_USER 
GO
ALTER DATABASE [CursoOnline] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [CursoOnline] SET DB_CHAINING OFF 
GO
ALTER DATABASE [CursoOnline] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [CursoOnline] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [CursoOnline] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [CursoOnline] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [CursoOnline] SET QUERY_STORE = OFF
GO
/****** Object:  Login [NT SERVICE\Winmgmt]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [NT SERVICE\Winmgmt] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/****** Object:  Login [NT SERVICE\SQLWriter]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [NT SERVICE\SQLWriter] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/****** Object:  Login [NT SERVICE\SQLTELEMETRY$SQLEXPRESS]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [NT SERVICE\SQLTELEMETRY$SQLEXPRESS] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/****** Object:  Login [NT Service\MSSQL$SQLEXPRESS]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [NT Service\MSSQL$SQLEXPRESS] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/****** Object:  Login [NT AUTHORITY\SYSTEM]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [NT AUTHORITY\SYSTEM] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/* For security reasons the login is created disabled and with a random password. */
/****** Object:  Login [Login_Instructor]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [Login_Instructor] WITH PASSWORD=N'1yNldVh/PUuP9Sn32xMdH6foQSAb6bteBCwmG21Xmp0=', DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english], CHECK_EXPIRATION=OFF, CHECK_POLICY=ON
GO
ALTER LOGIN [Login_Instructor] DISABLE
GO
/* For security reasons the login is created disabled and with a random password. */
/****** Object:  Login [Login_Estudiante]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [Login_Estudiante] WITH PASSWORD=N'DO+sg42OYdqRe6lN3h/xx3vqsMfPLD3+wY5prSezGpQ=', DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english], CHECK_EXPIRATION=OFF, CHECK_POLICY=ON
GO
ALTER LOGIN [Login_Estudiante] DISABLE
GO
/* For security reasons the login is created disabled and with a random password. */
/****** Object:  Login [Login_Administrador]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [Login_Administrador] WITH PASSWORD=N'aAWiQXklRlcnk3sI8gby7d+kHGw4OnV6YLMmmzyreow=', DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english], CHECK_EXPIRATION=OFF, CHECK_POLICY=ON
GO
ALTER LOGIN [Login_Administrador] DISABLE
GO
/****** Object:  Login [LOCAL\marcom296]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [LOCAL\marcom296] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/****** Object:  Login [BUILTIN\Usuarios]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [BUILTIN\Usuarios] FROM WINDOWS WITH DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english]
GO
/* For security reasons the login is created disabled and with a random password. */
/****** Object:  Login [##MS_PolicyTsqlExecutionLogin##]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [##MS_PolicyTsqlExecutionLogin##] WITH PASSWORD=N't8ot7h7jBTeGlVP421sCiXOvvAFOD5fDWGHCUV+ynbY=', DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english], CHECK_EXPIRATION=OFF, CHECK_POLICY=ON
GO
ALTER LOGIN [##MS_PolicyTsqlExecutionLogin##] DISABLE
GO
/* For security reasons the login is created disabled and with a random password. */
/****** Object:  Login [##MS_PolicyEventProcessingLogin##]    Script Date: 17/02/2025 19:50:56 ******/
CREATE LOGIN [##MS_PolicyEventProcessingLogin##] WITH PASSWORD=N'zGvg8HMxVxgToDkXrQpWON1cRotNVdqsDySbwnvO8pE=', DEFAULT_DATABASE=[master], DEFAULT_LANGUAGE=[us_english], CHECK_EXPIRATION=OFF, CHECK_POLICY=ON
GO
ALTER LOGIN [##MS_PolicyEventProcessingLogin##] DISABLE
GO
ALTER SERVER ROLE [sysadmin] ADD MEMBER [NT SERVICE\Winmgmt]
GO
ALTER SERVER ROLE [sysadmin] ADD MEMBER [NT SERVICE\SQLWriter]
GO
ALTER SERVER ROLE [sysadmin] ADD MEMBER [NT Service\MSSQL$SQLEXPRESS]
GO
ALTER SERVER ROLE [sysadmin] ADD MEMBER [LOCAL\marcom296]
GO
USE [CursoOnline]
GO
/****** Object:  User [UsuarioInstructor]    Script Date: 17/02/2025 19:50:56 ******/
CREATE USER [UsuarioInstructor] FOR LOGIN [Login_Instructor] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [UsuarioEstudiante]    Script Date: 17/02/2025 19:50:56 ******/
CREATE USER [UsuarioEstudiante] FOR LOGIN [Login_Estudiante] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  User [UsuarioAdmin]    Script Date: 17/02/2025 19:50:56 ******/
CREATE USER [UsuarioAdmin] FOR LOGIN [Login_Administrador] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  DatabaseRole [Rol_InstructorCursoOnline]    Script Date: 17/02/2025 19:50:56 ******/
CREATE ROLE [Rol_InstructorCursoOnline]
GO
/****** Object:  DatabaseRole [Rol_EstudianteCursoOnline]    Script Date: 17/02/2025 19:50:56 ******/
CREATE ROLE [Rol_EstudianteCursoOnline]
GO
/****** Object:  DatabaseRole [Rol_AdministradorCursoOnline]    Script Date: 17/02/2025 19:50:56 ******/
CREATE ROLE [Rol_AdministradorCursoOnline]
GO
ALTER ROLE [Rol_InstructorCursoOnline] ADD MEMBER [UsuarioInstructor]
GO
ALTER ROLE [Rol_EstudianteCursoOnline] ADD MEMBER [UsuarioEstudiante]
GO
ALTER ROLE [Rol_AdministradorCursoOnline] ADD MEMBER [UsuarioAdmin]
GO
/****** Object:  Table [dbo].[Estudiantes]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Estudiantes](
	[ID_Estudiante] [int] IDENTITY(1,1) NOT NULL,
	[Email] [nvarchar](255) NOT NULL,
	[Calificacion] [int] NULL,
	[FechaAsignacion] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Estudiante] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  View [dbo].[VistaCalificacionGeneral]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
--Vista 1

CREATE VIEW [dbo].[VistaCalificacionGeneral] AS

SELECT AVG(Calificacion) AS CalificacionGeneral
FROM Estudiantes;
GO
/****** Object:  Table [dbo].[Curso]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Curso](
	[ID_Curso] [int] IDENTITY(1,1) NOT NULL,
	[ID_TituloCurso] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Curso] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[TituloCurso]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[TituloCurso](
	[ID_TituloCurso] [int] IDENTITY(1,1) NOT NULL,
	[Titulo] [nvarchar](255) NOT NULL,
	[Descripcion] [nvarchar](2048) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_TituloCurso] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  View [dbo].[VistaCursos]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
--Vista 2
CREATE VIEW [dbo].[VistaCursos]
AS

Select	c.ID_Curso,
	tc.Titulo, tc.Descripcion

FROM Curso as c
INNER JOIN TituloCurso AS tc ON tc.ID_TituloCurso = c.ID_TituloCurso;

GO
/****** Object:  Table [dbo].[ApellidoEstudiante]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ApellidoEstudiante](
	[ApellidoEstudiante] [nvarchar](255) NOT NULL,
	[ID_Estudiante] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ApellidoInstructor]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ApellidoInstructor](
	[ApellidoInstructor] [nvarchar](255) NOT NULL,
	[ID_Instructor] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CursoEstudiante]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CursoEstudiante](
	[ID_Estudiante] [int] NULL,
	[ID_Curso] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Instructores]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Instructores](
	[ID_Instructor] [int] IDENTITY(1,1) NOT NULL,
	[ID_Curso] [int] NULL,
	[Especialidad] [nvarchar](255) NOT NULL,
	[Email] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Instructor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Lecciones]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Lecciones](
	[ID_Leccion] [int] IDENTITY(1,1) NOT NULL,
	[ID_TituloLecciones] [int] NULL,
	[ID_Curso] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Leccion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[NombreEstudiante]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[NombreEstudiante](
	[NombreEstudiante] [nvarchar](255) NOT NULL,
	[ID_Estudiante] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[NombreInstructor]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[NombreInstructor](
	[NombreInstructor] [nvarchar](255) NOT NULL,
	[ID_Instructor] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[numCelularEstudiante]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[numCelularEstudiante](
	[numCelularEstudiante] [int] NOT NULL,
	[ID_Estudiante] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[TituloLecciones]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[TituloLecciones](
	[ID_TituloLecciones] [int] IDENTITY(1,1) NOT NULL,
	[Titulo] [nvarchar](255) NOT NULL,
	[Contenido] [nvarchar](2048) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_TituloLecciones] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Diaz', 1)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Gutierrez', 2)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Ferro', 3)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Lopez', 4)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Garcia', 5)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Castillo', 5)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Santillo', 6)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Flores', 7)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Calle', 8)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Diaz', 9)
INSERT [dbo].[ApellidoEstudiante] ([ApellidoEstudiante], [ID_Estudiante]) VALUES (N'Gomez', 10)
GO
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'López', 1)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Fernández', 2)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'García', 3)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Rodriguez', 4)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Perez', 4)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Martinez', 5)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'García', 6)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Sánchez', 7)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Fernández', 8)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Conde', 8)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'García', 9)
INSERT [dbo].[ApellidoInstructor] ([ApellidoInstructor], [ID_Instructor]) VALUES (N'Martínez', 10)
GO
SET IDENTITY_INSERT [dbo].[Curso] ON 

INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (1, 1)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (2, 2)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (3, 3)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (4, 4)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (5, 5)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (6, 6)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (7, 7)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (8, 8)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (9, 9)
INSERT [dbo].[Curso] ([ID_Curso], [ID_TituloCurso]) VALUES (10, 10)
SET IDENTITY_INSERT [dbo].[Curso] OFF
GO
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (1, 1)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (2, 2)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (3, 3)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (4, 4)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (5, 5)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (6, 6)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (7, 7)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (8, 8)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (9, 9)
INSERT [dbo].[CursoEstudiante] ([ID_Estudiante], [ID_Curso]) VALUES (10, 10)
GO
SET IDENTITY_INSERT [dbo].[Estudiantes] ON 

INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (1, N'guilled@gmail.com', 8, CAST(N'2023-11-15' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (2, N'albertog@gmaill.com', 6, CAST(N'2022-02-06' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (3, N'luisaj@hotmail.com', 4, CAST(N'2019-09-09' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (4, N'leanl@yahoo.com', 3, CAST(N'2024-06-14' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (5, N'fedec@gmail.com', 9, CAST(N'2022-06-04' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (6, N'gonzas@gmail.com', 8, CAST(N'2024-08-03' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (7, N'manuflores@hotmail.com', 10, CAST(N'2024-10-31' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (8, N'fabc@yahoo.com', 6, CAST(N'2024-06-25' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (9, N'hernand@gmail.com', 6, CAST(N'2019-01-08' AS Date))
INSERT [dbo].[Estudiantes] ([ID_Estudiante], [Email], [Calificacion], [FechaAsignacion]) VALUES (10, N'sandrog@hotmail.com', 8, CAST(N'2023-07-03' AS Date))
SET IDENTITY_INSERT [dbo].[Estudiantes] OFF
GO
SET IDENTITY_INSERT [dbo].[Instructores] ON 

INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (1, 1, N'Psicología Cognitiva y Teorías del Aprendizaje', N'anamaria@gmail.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (2, 2, N'Psicología Educativa y Motivación Escolar', N'carlosfer@yahoo')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (3, 3, N'Neurociencia Cognitiva y Aprendizaje', N'luisneurus@gmail.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (4, 4, N'Desarrollo Cognitivo Infantil', N'martaperez@hotmail.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (5, 5, N'Educación Superior y Aprendizaje Autónomo', N'javierm@hotmail')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (6, 6, N'Evaluación Educativa y Diseño de Pruebas', N'Elenag@gmail.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (7, 7, N'Psicología del Aprendizaje y Conducta', N'pablopsic@hotmail.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (8, 8, N'Adquisición de Lenguas y Lingüística Aplicada', N'isabelconde@yahoo.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (9, 9, N'Tecnología Educativa y Diseño de Instrucción', N'robertoedu@gmail.com')
INSERT [dbo].[Instructores] ([ID_Instructor], [ID_Curso], [Especialidad], [Email]) VALUES (10, 10, N'Psicología Social y Teorías Constructivistas', N'lauram@hotmail.com')
SET IDENTITY_INSERT [dbo].[Instructores] OFF
GO
SET IDENTITY_INSERT [dbo].[Lecciones] ON 

INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (1, 1, 1)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (2, 2, 2)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (3, 3, 3)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (4, 4, 4)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (5, 5, 5)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (6, 6, 6)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (7, 7, 7)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (8, 8, 8)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (9, 9, 9)
INSERT [dbo].[Lecciones] ([ID_Leccion], [ID_TituloLecciones], [ID_Curso]) VALUES (10, 10, 10)
SET IDENTITY_INSERT [dbo].[Lecciones] OFF
GO
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Guillermo', 1)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Alberto', 2)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Luisa', 3)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Jazmin', 3)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Leandro', 4)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Juan', 4)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Federico', 5)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Gonzalo', 6)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Manuel', 7)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Elias', 7)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Fabian', 8)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Hernan', 9)
INSERT [dbo].[NombreEstudiante] ([NombreEstudiante], [ID_Estudiante]) VALUES (N'Sandro', 10)
GO
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Ana', 1)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'María', 1)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Carlos', 2)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Luis', 3)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Marta', 4)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Javier', 5)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Elena', 6)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Pablo', 7)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Isabel', 8)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Roberto', 9)
INSERT [dbo].[NombreInstructor] ([NombreInstructor], [ID_Instructor]) VALUES (N'Laura', 10)
GO
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1149374263, 1)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1134905445, 2)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1589540093, 2)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1583982033, 3)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1518940381, 4)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1138902818, 5)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1194029324, 6)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1590248933, 6)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1148239481, 7)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1148302332, 8)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1133429500, 9)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1158982034, 9)
INSERT [dbo].[numCelularEstudiante] ([numCelularEstudiante], [ID_Estudiante]) VALUES (1590632454, 10)
GO
SET IDENTITY_INSERT [dbo].[TituloCurso] ON 

INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (1, N'Teorías Cognitivas del Aprendizaje', N'Este curso profundiza en las principales teorías cognitivas que explican cómo los seres humanos adquieren, procesan y almacenan información. Se estudiarán teorías como el constructivismo de Piaget, el procesamiento de la información y la teoría del aprendizaje de Vygotsky, proporcionando una comprensión profunda de cómo funciona la mente durante el aprendizaje.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (2, N'Psicología Educativa: Fundamentos del Aprendizaje en el Contexto Escolar', N'En este curso, se exploran los principios de la psicología educativa aplicados a la enseñanza y el aprendizaje. Se analiza cómo los factores individuales, emocionales, sociales y culturales influyen en los procesos de aprendizaje en el aula, y cómo se pueden utilizar estos conocimientos para mejorar la educación.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (3, N'Neurociencia del Aprendizaje: Bases Biológicas y Psicológicas', N'Este curso ofrece una introducción a los procesos neuronales implicados en el aprendizaje, abordando temas como la neuroplasticidad, la memoria, la atención y las emociones. Los estudiantes aprenderán cómo el cerebro responde a la experiencia y cómo estos conocimientos pueden ser aplicados en contextos educativos para optimizar el aprendizaje.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (4, N'Aprendizaje y Desarrollo Cognitivo en la Infancia', N'Centrado en el desarrollo cognitivo de los niños, este curso analiza las etapas del aprendizaje desde una perspectiva psicológica y educativa. Se examinan las teorías del desarrollo cognitivo de autores como Piaget y Vygotsky, y se discuten las implicaciones para la enseñanza en la educación infantil.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (5, N'Modelos de Aprendizaje en la Educación Superior: Teoría y Práctica', N'Este curso explora los modelos de aprendizaje utilizados en la educación superior, incluyendo el aprendizaje autónomo, el aprendizaje basado en problemas (ABP), y el aprendizaje colaborativo. Los estudiantes analizarán las ventajas y desafíos de cada modelo y cómo aplicarlos eficazmente en el aula universitaria.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (6, N'Evaluación del Aprendizaje: Métodos y Estrategias', N'A lo largo de este curso, se estudiarán las diferentes formas de evaluar el aprendizaje de los estudiantes, desde pruebas estandarizadas hasta evaluaciones formativas. Los estudiantes aprenderán a diseñar y aplicar instrumentos de evaluación adecuados a distintos contextos educativos y a interpretar los resultados de manera efectiva.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (7, N'Psicología del Aprendizaje: Principios y Aplicaciones', N'Este curso proporciona un enfoque académico sobre los principios psicológicos que subyacen al proceso de aprendizaje. Se cubrirán temas como la motivación, la memoria, la atención y las diferencias individuales, y cómo estos principios se aplican en el diseño de programas educativos.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (8, N'Aprendizaje de Segunda Lengua: Teoría y Métodos de Enseñanza', N'Este curso se centra en los aspectos teóricos y prácticos del aprendizaje de una segunda lengua. Se estudiarán teorías cognitivas y socioculturales del aprendizaje de lenguas, y se explorarán métodos y enfoques como el enfoque comunicativo y el enfoque por tareas, entre otros.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (9, N'Tecnología Educativa: Integración y Desarrollo en el Aprendizaje', N'En este curso, los estudiantes aprenderán sobre el uso de las tecnologías digitales para mejorar el aprendizaje. Se estudiarán plataformas de aprendizaje en línea, herramientas interactivas y recursos multimedia, y cómo estos pueden ser integrados en el aula para fomentar un aprendizaje más efectivo.')
INSERT [dbo].[TituloCurso] ([ID_TituloCurso], [Titulo], [Descripcion]) VALUES (10, N'Aprendizaje Social y Constructivismo: Teorías y Aplicaciones Educativas', N'Este curso se enfoca en las teorías constructivistas y sociales del aprendizaje, particularmente en la teoría de Vygotsky. Los estudiantes explorarán cómo el aprendizaje es influenciado por el contexto social y cultural, y cómo los educadores pueden crear entornos que promuevan la interacción y el aprendizaje colaborativo.')
SET IDENTITY_INSERT [dbo].[TituloCurso] OFF
GO
SET IDENTITY_INSERT [dbo].[TituloLecciones] ON 

INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (1, N'Introducción a la Teoría Cognitiva del Aprendizaje', N'En esta lección, exploraremos los principios fundamentales de las teorías cognitivas del aprendizaje, que consideran el aprendizaje como un proceso activo y constructivo. Se explicará la teoría del procesamiento de la información, cómo la mente humana procesa estímulos y la importancia de los esquemas mentales en la comprensión y retención de nueva información. Se introducirán las teorías más influyentes, como las de Piaget y Ausubel, y se discutirá cómo estas han influido en la educación moderna.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (2, N'El Rol de las Emociones en el Aprendizaje Escolar', N'Esta lección abordará la influencia de las emociones en el proceso de aprendizaje y su impacto en el rendimiento escolar. Se explorará cómo el estado emocional de un estudiante puede mejorar o bloquear su capacidad para aprender, y se presentarán teorías sobre la emoción y la motivación en el contexto educativo, como la teoría de la autodeterminación de Deci y Ryan. Se discutirán también estrategias pedagógicas para crear un entorno emocionalmente seguro que favorezca el aprendizaje.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (3, N'Introducción a la Neurociencia del Aprendizaje', N'Esta lección introductoria presentará los fundamentos de la neurociencia aplicados al aprendizaje. Se explicará cómo el cerebro procesa la información durante el aprendizaje, con un enfoque en la neuroplasticidad, el proceso de formación de memorias y el papel de la corteza prefrontal en la toma de decisiones y la resolución de problemas. También se explorarán las implicaciones de estos procesos en la educación, como la importancia del sueño y la atención para la consolidación de la memoria.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (4, N'El Desarrollo Cognitivo Infantil Según Piaget', N'En esta lección se estudiará el modelo de desarrollo cognitivo infantil propuesto por Jean Piaget. Se explicarán las cuatro etapas del desarrollo cognitivo (sensorimotor, preoperacional, operacional concreta y operacional formal) y se analizará cómo los niños construyen su conocimiento del mundo a través de la interacción con su entorno. Se discutirán las implicaciones de estas etapas para el diseño de actividades educativas en la infancia.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (5, N'El Aprendizaje Autónomo en la Educación Superior', N'Esta lección explora el modelo de aprendizaje autónomo, en el cual el estudiante asume un papel activo en la gestión de su propio aprendizaje. Se analizarán las ventajas de este modelo en la educación superior, tales como la mejora de la responsabilidad y la motivación intrínseca. También se discutirán las estrategias que los educadores pueden utilizar para fomentar la autonomía, incluyendo la planificación de tareas, el uso de recursos digitales y la retroalimentación constante.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (6, N'Tipos de Evaluación en el Contexto Educativo', N'En esta lección se presentarán los principales tipos de evaluación utilizados en el contexto educativo: evaluación diagnóstica, formativa y sumativa. Se explicará cómo cada tipo de evaluación cumple diferentes objetivos en el proceso de aprendizaje, desde identificar las necesidades de los estudiantes hasta medir su rendimiento final. También se explorará cómo diseñar evaluaciones que sean justas, válidas y confiables, con ejemplos prácticos de cada tipo.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (7, N'Principios de la Psicología del Aprendizaje', N'Esta lección proporciona una visión general de los principales principios psicológicos del aprendizaje, como el condicionamiento clásico de Pavlov, el condicionamiento operante de Skinner, y la teoría del aprendizaje social de Bandura. Se explicarán cómo estos principios influyen en la manera en que los estudiantes adquieren y retienen nueva información, y cómo se aplican en el diseño de intervenciones educativas efectivas para mejorar el rendimiento académico.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (8, N'Teorías Cognitivas del Aprendizaje de una Segunda Lengua', N'En esta lección se abordarán las teorías cognitivas más relevantes para el aprendizaje de una segunda lengua, como el modelo de procesamiento de la información y el enfoque basado en el input comprensible de Krashen. Se analizará cómo los estudiantes procesan y adquieren una lengua extranjera, y se discutirán las implicaciones de estos enfoques en el aula, especialmente en relación con la producción oral y escrita, así como en la comprensión auditiva.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (9, N'Herramientas Digitales para el Aprendizaje Activo', N'Esta lección explorará diversas herramientas digitales que promueven el aprendizaje activo en el aula. Se revisarán plataformas como Google Classroom, Moodle y herramientas interactivas como Kahoot!, que permiten a los estudiantes interactuar con los contenidos y con sus compañeros de manera dinámica. Además, se discutirá cómo los educadores pueden integrar estas herramientas en sus prácticas pedagógicas para mejorar la participación y el rendimiento de los estudiantes.')
INSERT [dbo].[TituloLecciones] ([ID_TituloLecciones], [Titulo], [Contenido]) VALUES (10, N'El Constructivismo Social de Vygotsky', N'En esta lección, se explorará la teoría del aprendizaje social de Lev Vygotsky, con un enfoque en la importancia del contexto social en el aprendizaje. Se analizarán conceptos clave como la zona de desarrollo próximo (ZDP) y el andamiaje, y cómo los educadores pueden utilizar estas ideas para apoyar el aprendizaje de los estudiantes mediante la interacción social y la colaboración. Además, se discutirá la relación entre el lenguaje y el pensamiento, según Vygotsky.')
SET IDENTITY_INSERT [dbo].[TituloLecciones] OFF
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Estudiante_Apellido]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Estudiante_Apellido] ON [dbo].[ApellidoEstudiante]
(
	[ApellidoEstudiante] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Instructor_Apellido]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Instructor_Apellido] ON [dbo].[ApellidoInstructor]
(
	[ApellidoInstructor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_Estudiante_Calificacion]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Estudiante_Calificacion] ON [dbo].[Estudiantes]
(
	[Calificacion] ASC,
	[FechaAsignacion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Instructor_Especialidad]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Instructor_Especialidad] ON [dbo].[Instructores]
(
	[Especialidad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Estudiante_Nombre]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Estudiante_Nombre] ON [dbo].[NombreEstudiante]
(
	[NombreEstudiante] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Instructor_Nombre]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Instructor_Nombre] ON [dbo].[NombreInstructor]
(
	[NombreInstructor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [IX_Estudiante_Celular]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Estudiante_Celular] ON [dbo].[numCelularEstudiante]
(
	[numCelularEstudiante] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Curso_Titulo]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Curso_Titulo] ON [dbo].[TituloCurso]
(
	[Titulo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [IX_Leccion_Titulo]    Script Date: 17/02/2025 19:50:57 ******/
CREATE NONCLUSTERED INDEX [IX_Leccion_Titulo] ON [dbo].[TituloLecciones]
(
	[Titulo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [dbo].[ApellidoEstudiante]  WITH CHECK ADD FOREIGN KEY([ID_Estudiante])
REFERENCES [dbo].[Estudiantes] ([ID_Estudiante])
GO
ALTER TABLE [dbo].[ApellidoInstructor]  WITH CHECK ADD FOREIGN KEY([ID_Instructor])
REFERENCES [dbo].[Instructores] ([ID_Instructor])
GO
ALTER TABLE [dbo].[Curso]  WITH CHECK ADD FOREIGN KEY([ID_TituloCurso])
REFERENCES [dbo].[TituloCurso] ([ID_TituloCurso])
GO
ALTER TABLE [dbo].[CursoEstudiante]  WITH CHECK ADD FOREIGN KEY([ID_Curso])
REFERENCES [dbo].[Curso] ([ID_Curso])
GO
ALTER TABLE [dbo].[CursoEstudiante]  WITH CHECK ADD FOREIGN KEY([ID_Estudiante])
REFERENCES [dbo].[Estudiantes] ([ID_Estudiante])
GO
ALTER TABLE [dbo].[Instructores]  WITH CHECK ADD FOREIGN KEY([ID_Curso])
REFERENCES [dbo].[Curso] ([ID_Curso])
GO
ALTER TABLE [dbo].[Lecciones]  WITH CHECK ADD FOREIGN KEY([ID_Curso])
REFERENCES [dbo].[Curso] ([ID_Curso])
GO
ALTER TABLE [dbo].[Lecciones]  WITH CHECK ADD FOREIGN KEY([ID_TituloLecciones])
REFERENCES [dbo].[TituloLecciones] ([ID_TituloLecciones])
GO
ALTER TABLE [dbo].[NombreEstudiante]  WITH CHECK ADD FOREIGN KEY([ID_Estudiante])
REFERENCES [dbo].[Estudiantes] ([ID_Estudiante])
GO
ALTER TABLE [dbo].[NombreInstructor]  WITH CHECK ADD FOREIGN KEY([ID_Instructor])
REFERENCES [dbo].[Instructores] ([ID_Instructor])
GO
ALTER TABLE [dbo].[numCelularEstudiante]  WITH CHECK ADD FOREIGN KEY([ID_Estudiante])
REFERENCES [dbo].[Estudiantes] ([ID_Estudiante])
GO
/****** Object:  StoredProcedure [dbo].[sp_ConsultarEstudiante]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_ConsultarEstudiante]
	@ID_Estudiante INT
AS
BEGIN



	SELECT e.ID_Estudiante, e.Email, e.Calificacion, e.FechaAsignacion, 
		ne.NombreEstudiante, 
		ae.ApellidoEstudiante, 
		ce.numCelularEstudiante
	FROM Estudiantes AS e
	INNER JOIN NombreEstudiante AS ne
	ON e.ID_Estudiante = ne.ID_Estudiante
	INNER JOIN ApellidoEstudiante AS ae
	ON e.ID_Estudiante = ae.ID_Estudiante
	INNER JOIN numCelularEstudiante AS ce
	ON e.ID_Estudiante = ce.ID_Estudiante

	WHERE e.ID_Estudiante = @ID_Estudiante;
END
GO
/****** Object:  Trigger [dbo].[ModificacionEstudiantes]    Script Date: 17/02/2025 19:50:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
--Trigger

CREATE TRIGGER [dbo].[ModificacionEstudiantes]
ON [dbo].[Estudiantes] AFTER UPDATE
AS
BEGIN
	DECLARE @ID_Estudiante INT;
	SELECT @ID_Estudiante =	ID_Estudiante FROM INSERTED;

	PRINT 'Se ha actualizado la tabla Estudiantes del ID: ' + CAST(@ID_Estudiante AS NVARCHAR);

SELECT e.ID_Estudiante, e.Calificacion, e.FechaAsignacion,
	ne.NombreEstudiante,
	ae.ApellidoEstudiante,
	ce.numCelularEstudiante

	FROM Estudiantes e
	INNER JOIN NombreEstudiante AS ne ON e.ID_Estudiante = ne.ID_Estudiante
	INNER JOIN ApellidoEstudiante AS ae ON e.ID_Estudiante = ae.ID_Estudiante
	INNER JOIN numCelularEstudiante AS ce ON e.ID_Estudiante = ce.ID_Estudiante;

END;
GO
ALTER TABLE [dbo].[Estudiantes] ENABLE TRIGGER [ModificacionEstudiantes]
GO
USE [master]
GO
ALTER DATABASE [CursoOnline] SET  READ_WRITE 
GO
