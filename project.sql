-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 04 2020 г., 21:27
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_genre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci DEFAULT NULL,
  `book_price` decimal(6,2) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`book_isbn`, `book_genre`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisherid`) VALUES
('978-0-7301', 'psychology', 'It\'s the Customer, Stupid!. 34 Wake-up Calls to Help You Sta', 'Jeffrey Gitomer, Michael Aun A', 'a.jpg', 'Ruthlessly focus on what\'s convenient for customers, not what\'s convenient for you Ninety percent of dissatisfied clients will take their business elsewhere and never tell you why. However, ninety-five percent will become loyal customers again if their needs and problems are addressed and remedied. Speaker and salesperson Michael Aun shares these secrets and many more in It\'s the Customer, Stupid!, a guide to growing any business by gaining new customers, and, more importantly, by keeping the ones you have happy and coming back for more. This fun-to-read book explains common myths about sales and customer satisfaction, starting with the fact that most businesses think they\'re customer-centric, but they just aren\'t. Get proven steps to REALLY put your customer at the center of what you do Distinguish your business from the competition by understanding the principle that good sales ARE good service Author received the Toastmasters «World Championship of Public Speaking» award and is also a full-time businessman practicing what he preaches daily It\'s the Customer, Stupid! reveals key actions that will shake up your business approach. Your customers will love you for them, and you\'ll love the effect on sales!', '25.00', 1),
('978-0-7302', 'children', 'Building a Minecraft City. Build Like a Pro!', 'Sarah Guthals', 'd.jpg', 'The coolest kid-friendly Minecraft projects If you have a Minecraft fanatic on your hands, you\'re about to be the most popular adult on the «block.» Offering young Minecraft enthusiasts the ultimate sandbox experience, Building a Minecraft City gives kids aged 7 – 11 an outlet to enhance their love of the game and take their creative play to new heights. Brought to you by the trusted For Dummies brand, this kid-focused book offers step-by-step instructions and simple explanations for completing projects that will teach your child invaluable new skills—all while having a ton of fun! They\'ll gain confidence as they design and build truly impressive Minecraft structures, and you\'ll delight in watching them develop and refine their problem-solving skills as they work on their own. It\'s a win-win! Features a kid-friendly design that is heavy on eye-popping graphics Focuses on three basic projects that set young readers on the road to further exploration Boasts a small, full-color, accessible package that instills confidence in the reader Introduces basic engineering concepts to kids in a way they can understand Screen time can be as educational as it is fun, and this book shows your child how to approach their favorite game from a new angle to think—and do—outside the box.', '18.00', 2),
('978-0-7303', 'fantasy', 'Harry Potter and the Philosopher\'s Stone', 'J.K.Rowling', 'j.jpg', 'Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry\'s eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!', '26.00', 3),
('978-0-7303-1484-4', 'children', 'Promotion of personal blogs in instagram', 'Alexandra Petrashina', 'c.jpg', 'I\'m talking to you, Sasha Mitroshina, a popular Instagram blogger. At the time of writing this book, my number of subscribers has exceeded one and a half million. Blogging gives me a lot. This is psychotherapy. This is self-expression. This is money. I will not lie and say that everything is perfect in blogging and that it is not at all tedious, easy and always pleasant. There are problems, as in any case. But if you are holding this book in your hands, then you must be wondering: HOW TO DO it? How do I become popular for YOU? At the same time, other questions arise: Why do some people become popular, and some do not? How much money will it take? At what point will the blog start generating revenue? And many others. I wrote this book to answer these questions.', '20.00', 4),
('978-0-7304', 'psychology', 'Healing Your Emotional Self.', 'Beverly Engel', 's.jpg', 'Healing Your Emotional Self «Emotionally abusive parents are indeed toxic parents, and they cause significant damage to their children\'s self-esteem, self-image, and body image. In this remarkable book, Beverly Engel shares her powerful Mirror Therapy program for helping adult survivors to overcome their shame and self-criticism, become more compassionate and accepting of themselves, and create a more posititve self-image. I strongly recommend it for anyone who was abused or neglected as a child.» –Susan Forward, Ph.D.,', '20.00', 5),
('978-0-7305', 'scientific', 'Space', 'Tim Vicary', 'l.jpg', 'Is there anyone who has not looked at the dark sky, and the shining points of light above us, and asked themselves questions about what is out there? Where did our planet come from? When did the universe begin? Could we live on another planet? And one question above all – is there life anywhere else in space? Begin a journey into space – where spacecraft travel at thousands of kilometres an hour, temperatures are millions of degrees, and a planet may be hard rock – or a ball of gas. In space, everything is extraordinary…', '22.00', 6),
('978-0-7306', 'fantasy', 'Sherlock Holmes: The Complete Collection', 'Mahon Classics, Arthur Conan Doyle', 'v.jpg', 'Sherlock Holmes is a fictional detective of the late 19th and early 20th centuries, who first appeared in publication in 1887. He is the creation of Scottish born author and physician Sir Arthur Conan Doyle. A brilliant London-based detective, Holmes is famous for his intellectual prowess, and is renowned for his skillful use of deductive reasoning (somewhat mistakenly – see inductive reasoning) and astute observation to solve difficult cases. He is arguably the most famous fictional detective ever created, and is one of the best known and most universally recognizable literary characters in any genre. Conan Doyle wrote four novels and fifty-six short stories that featured Holmes. All but four stories were narrated by Holmes\' friend and biographer, Dr. John H. Watson, two having been narrated by Holmes himself, and two others written in the third person. The first two stories, short novels, appeared in Beeton\'s Christmas Annual for 1887 and Lippincott\'s Monthly Magazine in 1890. The character grew tremendously in popularity with the beginning of the first series of short stories in The Strand Magazine in 1891; further series of short stories and two serialized novels appeared almost right up to Conan Doyle\'s death in 1930. The stories cover a period from around 1878 up to 1903, with a final case in 1914. in this collection you will find: Novels: • A Study in Scarlet • The Sign of the Four • The Hound of the Baskervilles • The Valley of Fear Short Story Collections: • The Adventures of Sherlock Holmes • The Memoirs of Sherlock Holmes • The Return of Sherlock Holmes • His Last Bow • The Casebook of Sherlock Holmes', '24.00', 7),
('978-0-7309', 'biography', 'My children', 'Guzel\' Yakhina', 'e.jpg', 'This is the story of Jacob Bach – an old Russian German, a German teacher at the school of the Gnadental colony. He lives as a hermit on a lonely farm, raises his daughter Anche and writes amazing fairy tales. And only in them can he share his own hopes, dreams, pain, fears and love. With your memories…\r\n\r\nThe stories of Jacob are the stories of the country itself. Times of hard times, famine, repression, unprecedented harvests and at the same time hungry everyday life, despair and fear. But with all this, the old German still keeps a simple and naive, but such a bright hope for a better future. But will it come?\r\n\r\n\"My children\" is a tragic, but in its own way beautiful story of a whole people who were invited by Catherine II to live in Russia. A people who had to endure extermination and exile.', '20.00', 8),
('978-1-118-94924-5', 'biography', 'Shantaram', ' Gregory David Roberts', 'f.jpg', 'We present to the reader one of the most striking novels of the beginning of the XXI century (in 2015 received a long – awaited sequel - \"Shadow of the mountain\"). This refract in artistic form, the confession of a man who managed to get out of the abyss and survive, has sold four million copies worldwide (half a million of them in Russia) and has earned enthusiastic comparisons with the works of the best writers of Modern times, from Melville to Hemingway. Like the author, the hero of this novel has been hiding from the law for many years. Deprived of parental rights after his divorce from his wife, he became addicted to drugs, committed a number of robberies, and was sentenced to nineteen years in prison by an Australian court. After escaping for a second year from a maximum-security prison, he made it to Bombay, where he was a counterfeiter and smuggler, sold weapons and participated in the Indian mafia showdown, and found his true love, only to lose it again, to find it again…', '20.00', 9),
('978-1-1180-2669-4', 'biography', 'The Last Child', 'Joan Hart ', 'g.jpg', 'John Hart\'s New York Times bestselling debut, The King of Lies, announced the arrival of a major talent. With Down River, he surpassed his earlier success, transcending the barrier between thriller and literature and winning the 2008 Edgar Award for best novel. Now, with The Last Child, he achieves his most significant work to date, an intricate, powerful story of loss, hope, and courage in the face of evil.\r\n', '20.00', 10),
('978-1-44937-019-0', 'scientific', 'Homo Deus: A Brief History of Tomorrow', 'Yuval Noah Harari', 'h.jpg', 'From the Author of The Number One Bestseller SapiensSapiens showed us where we came from. Homo Deus shows us where we\'re going. War is obsolete. You are more likely to commit suicide than be killed in conflict. Famine is disappearing. You are at more risk of obesity than starvation. Death is just a technical problem. Equality is out – but immortality is in. What does our future hold? Yuval Noah Harari, author of the bestselling phenomenon Sapiens envisions a not-too-distant world in which we face a new set of challenges. Homo Deus explores the projects, dreams and nightmares that will shape the twenty-first century – from overcoming death to creating artificial life. It asks the fundamental questions: Where do we go from here? And how will we protect this fragile world from our own destructive powers? ?????????: https://www.meloman.kz/unadapted-literature-in-english/harari-y-n-homo-deus-a-brief-history-of-2214925.html', '20.00', 11),
('978-1-44937-075-6', 'fantasy', ' Flowers For Algernon', 'Daniel Keyes', 'k.jpg', 'Charlie Gordon is a “retardate” – a 32-year-old developmentally disabled man with an I.Q. of 68 – who has the opportunity to undergo a surgical procedure that will dramatically increase his mental capabilities. He is highly motivated; he wants desperately to be “smart.” As the story unfolds in “progress reports” written by Charlie, we learn that his mother rejected him because his “dumbness” was an embarrassment to her. More than that: it was anathema. She wanted him out of her sight and away from his “normal” sibling (ironically named Norma).', '20.00', 12),
('978-1-4571-0402-2', 'psychology', 'GUT', 'Guilia Enders', 'i.jpg', 'To talk about the gut and its problems is not accepted, but in vain. After all, there is an opinion that this organ is the most powerful in our body, it is not for nothing that it is sometimes called the second brain. German microbiologist Julia Enders helps to understand the intricacies of this mysterious organ. It simply and clearly describes the entire process of digestion: serious and complex information is presented in a light form and accompanied by fun visual illustrations.\r\n\r\nWhat is the scientific approach to proper nutrition? Why do allergies and intolerances of certain products occur? What is the difference between antibiotics, prebiotics, and probiotics? In addition to answers to these and other questions, you will also learn a lot about the other organs involved in the digestive process, about their inhabitants – bacteria and microorganisms, about the reactions and connections of various body systems with each other.\r\n\r\nThe intestines control the processes that occur in the body, but nothing prevents you from controlling it! To establish a relationship with your own \"second brain\", read Julia Enders\'s book \"the Charming gut.', '20.00', 13),
('978-1-484216-40-8', 'scientific', 'Homo Sapiens: A Brief History of Humankind ', 'Yuval Noah Harari', 'q.jpg', 'Human beings (members of the genus Homo) have existed for about 2.4m years. Homo sapiens, our own wildly egregious species of great apes, has only existed for 6% of that time – about 150,000 years. So a book whose main title is Sapiens shouldn\'t be subtitled \"A Brief History of Humankind\". It\'s easy to see why Yuval Noah Harari devotes 95% of his book to us as a species: self-ignorant as we are, we still know far more about ourselves than about other species of human beings, including several that have become extinct since we first walked the Earth. The fact remains that the history of sapiens – Harari\'s name for us – is only a very small part of the history of humankind.', '20.00', 11),
('978-1-484217-26-9', 'fantasy', 'Origin', 'Dan Brown', 't.jpg', '\"Origin\" is the fifth book by American writer Dan brown about the Harvard Professor, a specialist in religious symbolism, Robert Langdon. This time, it all begins with perhaps one of the most significant events in history: it has finally become known where humanity came from. The futurist Edmond Kirsch, who made an incredible discovery, was just one step away from completely changing the way his contemporaries saw the world. However, his speech was not destined to be heard within the walls of the Guggenheim Museum. The scientist was killed in front of the guests. And the chaos began…\r\n\r\nLangdon is again waiting for dangerous adventures: from escaping from the Museum in a hail of bullets to finding encrypted keys that allow you to face Kirsch\'s discovery.', '20.00', 14),
('978-1-49192-706-9', 'scientific', '21 LESSONS FOR THE 21ST CENTURY', 'Yuval Noah Harari', 'u.jpg', '\r\nIn a world deluged by irrelevant information, clarity is power. Censorship works not by blocking the flow of information, but rather by flooding people with disinformation and distractions. 21 Lessons for the 21st Century cuts through these muddy waters and confronts some of the most urgent questions on today’s global agenda.', '20.00', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`name`, `email`, `text`, `date`) VALUES
('aida', '180107062@stu.sdu.edu.kz', 'i am angry\r\n', '2020-05-04');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(1, 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(2, 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(3, 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(4, 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(5, 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(6, '', '', '', '', ''),
(7, 'aid', 'barrova,31', 'Moskow', '16456', '??????'),
(8, 'aida', 'barrova,31', 'Moskow', '16456', '??????');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '20.00', '2020-04-24 05:53:23', 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(2, 2, '51.00', '2020-04-24 07:53:01', 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(3, 3, '26.00', '2020-04-24 08:08:19', 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(4, 4, '18.00', '2020-04-25 00:46:20', 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(5, 5, '63.00', '2020-05-02 10:07:42', 'aida', 'barrova,31', 'Moskow', '16456', '??????'),
(6, 6, '0.00', '2020-05-02 10:08:45', '', '', '', '', ''),
(7, 7, '18.00', '2020-05-02 10:09:22', 'aid', 'barrova,31', 'Moskow', '16456', '??????'),
(8, 8, '22.00', '2020-05-02 10:13:56', 'aida', 'barrova,31', 'Moskow', '16456', '??????');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-0-7303-1484-4', '20.00', 1),
(2, '978-0-7303', '26.00', 1),
(2, '978-0-7301', '25.00', 1),
(3, '978-0-7303', '26.00', 1),
(4, '978-0-7302', '18.00', 1),
(5, '978-1-484216-40-8', '20.00', 1),
(5, '978-0-7301', '25.00', 1),
(5, '978-0-7302', '18.00', 1),
(7, '978-0-7302', '18.00', 1),
(8, '978-0-7305', '22.00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(1, 'Jeffrey Gitomer, Michael Aun A'),
(2, 'Sarah Guthals'),
(3, 'J.K.Rowling'),
(4, 'Alexandra Petrashina'),
(5, 'Beverly Engel'),
(6, 'Tim Vicary'),
(7, 'Mahon Classics, Arthur Conan Doyle'),
(8, 'Guzel Yakhina'),
(9, 'Gregory David Roberts'),
(10, 'Joan Hart'),
(11, 'Yuval Noah Harari'),
(12, 'Daniel Keyes'),
(13, 'Guilia Enders'),
(14, 'Dan Brown');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Индексы таблицы `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
