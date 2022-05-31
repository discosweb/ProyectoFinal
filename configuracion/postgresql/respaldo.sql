--
-- PostgreSQL database dump
--

-- Dumped from database version 13.7 (Debian 13.7-0+deb11u1)
-- Dumped by pg_dump version 13.7 (Debian 13.7-0+deb11u1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: bdrecords; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA bdrecords;


ALTER SCHEMA bdrecords OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: artistas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.artistas (
    artista_id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    pais_nacimiento character varying(50) NOT NULL,
    fecha_nacimiento date NOT NULL,
    nombre_artistico character varying(50)
);


ALTER TABLE public.artistas OWNER TO postgres;

--
-- Name: artistas_artista_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.artistas_artista_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.artistas_artista_id_seq OWNER TO postgres;

--
-- Name: artistas_artista_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.artistas_artista_id_seq OWNED BY public.artistas.artista_id;


--
-- Name: cancion_compositor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cancion_compositor (
    cancion_id integer NOT NULL,
    compositor_id integer NOT NULL
);


ALTER TABLE public.cancion_compositor OWNER TO postgres;

--
-- Name: canciones; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.canciones (
    cancion_id integer NOT NULL,
    titulo character varying(50) NOT NULL
);


ALTER TABLE public.canciones OWNER TO postgres;

--
-- Name: canciones_cancion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.canciones_cancion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.canciones_cancion_id_seq OWNER TO postgres;

--
-- Name: canciones_cancion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.canciones_cancion_id_seq OWNED BY public.canciones.cancion_id;


--
-- Name: compositores; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.compositores (
    compositor_id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    pais_nacimiento character varying(50) NOT NULL,
    fecha_nacimiento date NOT NULL
);


ALTER TABLE public.compositores OWNER TO postgres;

--
-- Name: compositores_compositor_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.compositores_compositor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.compositores_compositor_id_seq OWNER TO postgres;

--
-- Name: compositores_compositor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.compositores_compositor_id_seq OWNED BY public.compositores.compositor_id;


--
-- Name: disco_cancion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.disco_cancion (
    disco_id integer NOT NULL,
    cancion_id integer NOT NULL
);


ALTER TABLE public.disco_cancion OWNER TO postgres;

--
-- Name: discos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.discos (
    disco_id integer NOT NULL,
    titulo character varying(50) NOT NULL,
    grupo_id integer NOT NULL,
    "año" date NOT NULL,
    genero character varying(50) NOT NULL,
    disquera_id integer NOT NULL,
    productor_id integer NOT NULL,
    costo numeric NOT NULL
);


ALTER TABLE public.discos OWNER TO postgres;

--
-- Name: discos_disco_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.discos_disco_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.discos_disco_id_seq OWNER TO postgres;

--
-- Name: discos_disco_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.discos_disco_id_seq OWNED BY public.discos.disco_id;


--
-- Name: disqueras; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.disqueras (
    disquera_id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    pais character varying(50) NOT NULL
);


ALTER TABLE public.disqueras OWNER TO postgres;

--
-- Name: disqueras_disquera_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.disqueras_disquera_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.disqueras_disquera_id_seq OWNER TO postgres;

--
-- Name: disqueras_disquera_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.disqueras_disquera_id_seq OWNED BY public.disqueras.disquera_id;


--
-- Name: grupo_artista; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.grupo_artista (
    artista_id integer NOT NULL,
    grupo_id integer NOT NULL
);


ALTER TABLE public.grupo_artista OWNER TO postgres;

--
-- Name: grupos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.grupos (
    grupo_id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    pais_origen character varying(50) NOT NULL
);


ALTER TABLE public.grupos OWNER TO postgres;

--
-- Name: grupos_grupo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.grupos_grupo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupos_grupo_id_seq OWNER TO postgres;

--
-- Name: grupos_grupo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.grupos_grupo_id_seq OWNED BY public.grupos.grupo_id;


--
-- Name: productores; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.productores (
    productor_id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    fecha_nacimiento date NOT NULL
);


ALTER TABLE public.productores OWNER TO postgres;

--
-- Name: productores_productor_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.productores_productor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.productores_productor_id_seq OWNER TO postgres;

--
-- Name: productores_productor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.productores_productor_id_seq OWNED BY public.productores.productor_id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuarios (
    usuario_id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(50) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- Name: usuarios_usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuarios_usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_usuario_id_seq OWNER TO postgres;

--
-- Name: usuarios_usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuarios_usuario_id_seq OWNED BY public.usuarios.usuario_id;


--
-- Name: artistas artista_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.artistas ALTER COLUMN artista_id SET DEFAULT nextval('public.artistas_artista_id_seq'::regclass);


--
-- Name: canciones cancion_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.canciones ALTER COLUMN cancion_id SET DEFAULT nextval('public.canciones_cancion_id_seq'::regclass);


--
-- Name: compositores compositor_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compositores ALTER COLUMN compositor_id SET DEFAULT nextval('public.compositores_compositor_id_seq'::regclass);


--
-- Name: discos disco_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.discos ALTER COLUMN disco_id SET DEFAULT nextval('public.discos_disco_id_seq'::regclass);


--
-- Name: disqueras disquera_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.disqueras ALTER COLUMN disquera_id SET DEFAULT nextval('public.disqueras_disquera_id_seq'::regclass);


--
-- Name: grupos grupo_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.grupos ALTER COLUMN grupo_id SET DEFAULT nextval('public.grupos_grupo_id_seq'::regclass);


--
-- Name: productores productor_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.productores ALTER COLUMN productor_id SET DEFAULT nextval('public.productores_productor_id_seq'::regclass);


--
-- Name: usuarios usuario_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN usuario_id SET DEFAULT nextval('public.usuarios_usuario_id_seq'::regclass);


--
-- Data for Name: artistas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.artistas (artista_id, nombre, apellido, pais_nacimiento, fecha_nacimiento, nombre_artistico) FROM stdin;
1	Ruben	Albarran	México	1967-02-01	Cosme
2	Leon Ruben	Larregui Marin	México	1973-12-01	\N
3	Alvaro Gonzalo	Lopez Parra	Chile	1979-11-04	\N
4	Enrique	Rangel	México	1973-11-09	\N
5	Alvaro	Arizaleta	España	1980-10-05	\N
6	Alfonso	Pichardo	México	1973-02-01	\N
7	Enrique	Ortiz de Land·zuri Yzarduy	España	1967-08-11	Enrique Bunbury
8	Christopher Anthony 	John Martin	Inglaterra	1977-03-02	Chris Martin
9	Edward Louis	Severson	Estados Unidos	1964-12-23	Eddy Vedder
10	Ximena	Sariñana	México	1985-10-20	\N
11	Adrian	Dargelos	Argentina	1969-01-03	\N
12	Juan Alfredo	Baleiron	Argentina	1965-03-11	Juanchi
13	James Douglas	Morrison Clarke	Estados Unidos	1943-12-08	Jim Morrison
14	William Bruce	Rose	Estados Unidos	1962-02-06	Axl Rose
15	Saul	Hudson	Inglaterra	1965-07-23	Slash
16	James Patrick	Page	Inglaterra	1944-01-09	Jimmy Page
17	Robert Anthony	Plant	Inglaterra	1948-08-20	Robert Plant
18	James Marshall	Hendrix	Estados Unidos	1942-11-17	Jimi Hendrix
19	Janis Lyn	Joplin	Estados Unidos	1943-01-19	Janis Joplin
20	Robert Allen	Zimmerman	Estados Unidos	1941-05-25	Bob Dylan
21	Michael Philip	Jagger	Inglaterra	1943-07-26	Mick Jagger
22	Charles Robert	Watts	Inglaterra	1941-06-02	Charlie Watts
23	John Winston	Lennon	Inglaterra	1940-10-09	John Lennon
24	Mariska	Veres	Países Bajos	1947-10-01	Mariska Veres
25	Anthony	Kiedis	Estados Unidos	1962-11-01	Anthony Kiedis
26	David Jon	Gilmour	Inglaterra	1943-03-06	David Gilmour
27	George Roger	Waters	Inglaterra	1946-09-06	Roger Waters
28	James Paul	McCartney	Inglaterra	1942-06-18	Paul McCartney
29	Richard Henri Parkin	Starkey	Inglaterra	1940-07-07	Rin Starr
30	John Cameron	Fogerty	Estados Unidos	1945-05-08	John Fogerty
31	Ray	Manzerak	Inglaterra	1945-02-18	\N
32	Santi	Balmes	España	1975-10-15	\N
33	Jordi	Roig	España	1975-09-09	\N
\.


--
-- Data for Name: cancion_compositor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cancion_compositor (cancion_id, compositor_id) FROM stdin;
1	1
2	2
3	3
4	2
5	4
6	5
7	5
8	6
9	7
10	8
11	9
12	10
13	11
14	12
16	15
23	16
29	17
15	17
19	18
20	18
28	19
27	20
31	21
26	21
25	22
\.


--
-- Data for Name: canciones; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.canciones (cancion_id, titulo) FROM stdin;
1	Seguir Siendo
2	Mars 200
3	Ven Aqui
4	Beat reaker
5	Como la flor
6	Perlas
7	Toro
8	Contigo estaré
9	La chispa adecuada
10	Green eyes
11	Yellow Ledbetter
12	No vuelvo mas
13	Pijamas
14	Runaway
15	Dead Horse
16	My generation
17	Peace Frog
18	Tutti Frutti
19	Immigrant Song
20	Dyer Maker
21	Mave On
22	Knockin On Heavens Door
23	Paint it Black
24	The Zephyr Song
25	Venus
26	I Saw Her Standing There
27	How i wish you were here
28	Have You Ever Seen the Rain?
29	Garden of eden
30	Roadhouse Blues
31	Twist and Shout
32	Purple Haze
33	Foxy Lady
35	Prueba
\.


--
-- Data for Name: compositores; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.compositores (compositor_id, nombre, apellido, pais_nacimiento, fecha_nacimiento) FROM stdin;
1	Enrique	Rangel	Mexico	1950-01-01
2	Jesus	Baez	Mexico	1968-01-01
3	Victor	Jara	Chile	1965-12-08
4	Abraham	Quintanilla	Texas	1971-12-04
5	Raúl	Arizaleta	España	1971-11-06
6	JuanCarlos	Lozano	Mexico	1968-04-09
7	Enrique	Bunbury	España	1967-11-08
8	Chris	Martin	Inglaterra	1977-02-03
9	Ximena	Sariñana	Mexico	1985-10-10
10	Gabriel	Manelli	Argentina	1968-02-09
11	Consuelo	Velázquez	Mexico	1916-06-06
12	PeterDennis	Blandford	Inglaterra	1945-09-05
13	MichaelPhilip	Jagger	Inglaterra	1943-06-07
14	WilliamBruce	Rose	EstadosUnidos	1962-06-02
15	JamesPatrick	Page	Inglaterra	1944-09-01
16	JohnCameron	Fogerty	EstadosUnidos	1945-08-05
17	DavidJon	Gilmour	Inglaterra	1946-06-03
18	Paul	McCartney	Inglaterra	1942-01-06
19	Robbievan	Leeuwen	Países Bajos	1944-02-10
20	Ruben	Albarran	México	1967-01-02
21	Leon Ruben	Larregui Marin	México	1973-01-12
22	Alvaro	Arizaleta	España	1980-05-10
23	Enrique	Ortiz de Land·zuri Yzarduy	España	1967-11-08
24	Agustin	Lara	México	1910-05-11
25	Santi	Balmes	España	1975-12-10
\.


--
-- Data for Name: disco_cancion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.disco_cancion (disco_id, cancion_id) FROM stdin;
1	1
2	2
3	3
4	4
5	5
5	6
6	7
6	8
7	9
7	7
8	11
10	12
10	13
11	14
13	15
13	16
14	17
16	23
17	27
20	25
21	1
22	35
\.


--
-- Data for Name: discos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.discos (disco_id, titulo, grupo_id, "año", genero, disquera_id, productor_id, costo) FROM stdin;
1	Seguir Siendo	1	2011-01-01	Varios	1	1	5
2	Rocanlover	2	2003-02-02	Rock	2	2	1
3	Vida de perros	3	2004-03-03	Tradicional	3	3	11
4	Demotape	5	2004-04-04	Rock	4	4	10
5	Diamantes	6	2011-05-05	Rock	5	5	2
6	En electrico	7	2009-06-06	Synth-pop	1	2	4
7	Avalancha	8	1983-07-07	07/07/Rock	4	6	11
8	A Rush of Blood to the Head	9	2002-08-08	Pop-rock	6	7	12
9	Jeremy	10	1992-09-09	Grunge	7	8	11
10	Mucho	11	2008-10-10	Rock-alternativo	8	10	5
11	Pampas Reggae	12	1994-11-11	Reggae	8	11	8
12	Led Zeppelin III	16	1970-12-12	Hard Rock	12	19	20
13	Use Your Illusion I	14	1991-01-01	Hard Rock	14	17	6
14	Morrison Hotel	13	1970-02-02	Blues Rock	15	12	10
15	Aftermath	15	1966-03-03	Hard Rock	11	14	6
16	By The Way	22	2002-04-04	Rock Alternativo	2	16	7
17	Wish You Were Here	17	1975-05-05	Rock Progresivo	17	20	4
18	Please Please Me	18	1963-06-06	Rock N Roll	13	18	15
19	Pendulum	19	1970-07-07	Rock	10	21	10
20	Venus / Hot Sand	20	1969-08-08	Rock	18	15	7
21	The Who Sings My Generation	21	1965-09-09	Rock and Roll	16	13	5
22	Cumbia	11	2022-05-26	Cumbias	1	13	500.50
\.


--
-- Data for Name: disqueras; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.disqueras (disquera_id, nombre, pais) FROM stdin;
1	Sony	Mexico
2	Warner Music	Estados Unidos
3	Big Sur records	Chile
4	Emi	Estados Unidos
5	Astro discos	España
6	Emi	Inglaterra
7	Sony Music	Estados Unidos
8	Universal Music	Argentina
9	Big Sur records	Chile
10	Fantasy Records	Estados Unidos
11	Decca Records	Inglaterra
12	Atlantic Records.	Estados Unidos
13	Parlophonev	Inglaterra
14	Geffen Records	Estados Unidos
15	Elektra Records	Estados Unidos
16	Brunswick	Inglaterra
17	Harvest Records	Inglaterra
18	Polydor Records	Inglaterra
\.


--
-- Data for Name: grupo_artista; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.grupo_artista (artista_id, grupo_id) FROM stdin;
1	1
2	2
3	3
4	1
5	6
6	7
7	8
8	9
11	11
12	12
13	13
32	22
33	22
14	14
31	13
15	14
16	16
17	16
21	15
23	18
28	18
29	18
\.


--
-- Data for Name: grupos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.grupos (grupo_id, nombre, pais_origen) FROM stdin;
1	Cafe Tacuba	México
2	Zoe	México
3	Los Bunkers	Chile
4	Los Amis Invisibles	Venezuela
5	Los Abandoned	Estados Unidos
6	Columpio asesino	España
7	Moenia	México
8	Heroes del silencio	España
9	Coldplay	Inglaterra
10	Pearl jam	Estados Unidos
11	Babasonicos	Argentina
12	Los pericos	Argentina
13	The Doors	Estados Unidos
14	Guns N Roses	Estados Unidos
15	The Rolling Stones	Inglaterra
16	Led Zeppelin 	Inglaterra
17	Pink Floyd	Inglaterra
18	The Beatles	Inglaterra
19	Creedence Clearwater Revival 	Estados Unidos
20	Shocking Blue	PaÌses Bajos
21	Hoppo	México
22	Love of Lesbian	España
\.


--
-- Data for Name: productores; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.productores (productor_id, nombre, apellido, fecha_nacimiento) FROM stdin;
1	Gustavo	Santoalla	1947-01-10
2	Phil	Vinalli	1957-01-12
3	Mauricio	Melo	1987-11-10
4	David	Trumfio	1963-01-08
5	Keina	Garcia	1972-01-11
6	Bob	Ezrin	1991-02-12
7	Kenn	Nelson	1960-05-10
8	Rick	Parashar	1975-02-05
9	Ximena	Sariñana	1988-01-11
10	Eduardo	Rocca	1969-10-02
11	Gaston	Peñero	1976-01-06
12	Paul	Rothchild	1985-02-07
13	Shel	Talmy	1976-03-09
14	Andrew Loog	Oldham	1955-07-03
15	Robbie van	Leeuwen	1976-02-05
16	Rick	Rubin	1981-03-06
17	Mike	Clink	1990-09-11
18	George	 Martin	1978-02-10
19	James Patrick	Page	1980-04-01
20	Roger Keith 	Barrett	1983-12-05
21	John Cameron	Fogerty	1977-01-12
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuarios (usuario_id, nombre, apellido, username, password) FROM stdin;
1	Desarrollo	Web	discos	discos123
\.


--
-- Name: artistas_artista_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.artistas_artista_id_seq', 34, true);


--
-- Name: canciones_cancion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.canciones_cancion_id_seq', 35, true);


--
-- Name: compositores_compositor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.compositores_compositor_id_seq', 26, true);


--
-- Name: discos_disco_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.discos_disco_id_seq', 22, true);


--
-- Name: disqueras_disquera_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.disqueras_disquera_id_seq', 19, true);


--
-- Name: grupos_grupo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.grupos_grupo_id_seq', 23, true);


--
-- Name: productores_productor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.productores_productor_id_seq', 22, true);


--
-- Name: usuarios_usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuarios_usuario_id_seq', 1, true);


--
-- Name: artistas artistas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.artistas
    ADD CONSTRAINT artistas_pkey PRIMARY KEY (artista_id);


--
-- Name: canciones canciones_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.canciones
    ADD CONSTRAINT canciones_pkey PRIMARY KEY (cancion_id);


--
-- Name: compositores compositores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compositores
    ADD CONSTRAINT compositores_pkey PRIMARY KEY (compositor_id);


--
-- Name: discos discos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.discos
    ADD CONSTRAINT discos_pkey PRIMARY KEY (disco_id);


--
-- Name: disqueras disqueras_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.disqueras
    ADD CONSTRAINT disqueras_pkey PRIMARY KEY (disquera_id);


--
-- Name: grupos grupos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_pkey PRIMARY KEY (grupo_id);


--
-- Name: grupo_artista pkag; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.grupo_artista
    ADD CONSTRAINT pkag PRIMARY KEY (artista_id, grupo_id);


--
-- Name: cancion_compositor pkcc; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cancion_compositor
    ADD CONSTRAINT pkcc PRIMARY KEY (cancion_id, compositor_id);


--
-- Name: disco_cancion pkdc; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.disco_cancion
    ADD CONSTRAINT pkdc PRIMARY KEY (disco_id, cancion_id);


--
-- Name: productores productores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.productores
    ADD CONSTRAINT productores_pkey PRIMARY KEY (productor_id);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (usuario_id);


--
-- Name: cancion_compositor cancion_compositor_cancion_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cancion_compositor
    ADD CONSTRAINT cancion_compositor_cancion_id_fkey FOREIGN KEY (cancion_id) REFERENCES public.canciones(cancion_id);


--
-- Name: cancion_compositor cancion_compositor_compositor_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cancion_compositor
    ADD CONSTRAINT cancion_compositor_compositor_id_fkey FOREIGN KEY (compositor_id) REFERENCES public.compositores(compositor_id);


--
-- Name: disco_cancion disco_cancion_cancion_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.disco_cancion
    ADD CONSTRAINT disco_cancion_cancion_id_fkey FOREIGN KEY (cancion_id) REFERENCES public.canciones(cancion_id);


--
-- Name: disco_cancion disco_cancion_disco_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.disco_cancion
    ADD CONSTRAINT disco_cancion_disco_id_fkey FOREIGN KEY (disco_id) REFERENCES public.discos(disco_id);


--
-- Name: discos discos_disquera_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.discos
    ADD CONSTRAINT discos_disquera_id_fkey FOREIGN KEY (disquera_id) REFERENCES public.disqueras(disquera_id);


--
-- Name: discos discos_grupo_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.discos
    ADD CONSTRAINT discos_grupo_id_fkey FOREIGN KEY (grupo_id) REFERENCES public.grupos(grupo_id);


--
-- Name: discos discos_productor_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.discos
    ADD CONSTRAINT discos_productor_id_fkey FOREIGN KEY (productor_id) REFERENCES public.productores(productor_id);


--
-- Name: grupo_artista grupo_artista_artista_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.grupo_artista
    ADD CONSTRAINT grupo_artista_artista_id_fkey FOREIGN KEY (artista_id) REFERENCES public.artistas(artista_id);


--
-- Name: grupo_artista grupo_artista_grupo_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.grupo_artista
    ADD CONSTRAINT grupo_artista_grupo_id_fkey FOREIGN KEY (grupo_id) REFERENCES public.grupos(grupo_id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

GRANT USAGE ON SCHEMA public TO read;
GRANT ALL ON SCHEMA public TO write;


--
-- Name: TABLE artistas; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.artistas TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.artistas TO write;


--
-- Name: SEQUENCE artistas_artista_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.artistas_artista_id_seq TO read;
GRANT USAGE ON SEQUENCE public.artistas_artista_id_seq TO write;


--
-- Name: TABLE cancion_compositor; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.cancion_compositor TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.cancion_compositor TO write;


--
-- Name: TABLE canciones; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.canciones TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.canciones TO write;


--
-- Name: SEQUENCE canciones_cancion_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.canciones_cancion_id_seq TO read;
GRANT USAGE ON SEQUENCE public.canciones_cancion_id_seq TO write;


--
-- Name: TABLE compositores; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.compositores TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.compositores TO write;


--
-- Name: SEQUENCE compositores_compositor_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.compositores_compositor_id_seq TO read;
GRANT USAGE ON SEQUENCE public.compositores_compositor_id_seq TO write;


--
-- Name: TABLE disco_cancion; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.disco_cancion TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.disco_cancion TO write;


--
-- Name: TABLE discos; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.discos TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.discos TO write;


--
-- Name: SEQUENCE discos_disco_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.discos_disco_id_seq TO read;
GRANT USAGE ON SEQUENCE public.discos_disco_id_seq TO write;


--
-- Name: TABLE disqueras; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.disqueras TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.disqueras TO write;


--
-- Name: SEQUENCE disqueras_disquera_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.disqueras_disquera_id_seq TO read;
GRANT USAGE ON SEQUENCE public.disqueras_disquera_id_seq TO write;


--
-- Name: TABLE grupo_artista; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.grupo_artista TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.grupo_artista TO write;


--
-- Name: TABLE grupos; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.grupos TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.grupos TO write;


--
-- Name: SEQUENCE grupos_grupo_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.grupos_grupo_id_seq TO read;
GRANT USAGE ON SEQUENCE public.grupos_grupo_id_seq TO write;


--
-- Name: TABLE productores; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.productores TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.productores TO write;


--
-- Name: SEQUENCE productores_productor_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.productores_productor_id_seq TO read;
GRANT USAGE ON SEQUENCE public.productores_productor_id_seq TO write;


--
-- Name: TABLE usuarios; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT ON TABLE public.usuarios TO read;
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.usuarios TO write;


--
-- Name: SEQUENCE usuarios_usuario_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.usuarios_usuario_id_seq TO read;
GRANT USAGE ON SEQUENCE public.usuarios_usuario_id_seq TO write;


--
-- Name: DEFAULT PRIVILEGES FOR SEQUENCES; Type: DEFAULT ACL; Schema: public; Owner: postgres
--

ALTER DEFAULT PRIVILEGES FOR ROLE postgres IN SCHEMA public GRANT USAGE ON SEQUENCES  TO write;


--
-- Name: DEFAULT PRIVILEGES FOR TABLES; Type: DEFAULT ACL; Schema: public; Owner: postgres
--

ALTER DEFAULT PRIVILEGES FOR ROLE postgres IN SCHEMA public GRANT SELECT ON TABLES  TO read;
ALTER DEFAULT PRIVILEGES FOR ROLE postgres IN SCHEMA public GRANT SELECT,INSERT,DELETE,UPDATE ON TABLES  TO write;


--
-- PostgreSQL database dump complete
--

