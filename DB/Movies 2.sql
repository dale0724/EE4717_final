-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2021-11-02 11:32:10
-- 服务器版本: 5.5.62-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `f32ee`
--

-- --------------------------------------------------------

--
-- 表的结构 `Movies`
--

CREATE TABLE IF NOT EXISTS `Movies` (
  `MovieID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `MovieName` varchar(100) NOT NULL,
  `Poster` varchar(200) NOT NULL,
  `ReleaseTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReleaseStatus` varchar(20) NOT NULL,
  `Directors` varchar(200) NOT NULL,
  `Actors` varchar(500) NOT NULL,
  `Descriptions` varchar(2000) NOT NULL,
  `Trailer` varchar(500) NOT NULL,
  PRIMARY KEY (`MovieID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `Movies`
--

INSERT INTO `Movies` (`MovieID`, `MovieName`, `Poster`, `ReleaseTime`, `ReleaseStatus`, `Directors`, `Actors`, `Descriptions`, `Trailer`) VALUES
(1, 'Black Panther', 'pics/blackPanther.jpg', '2021-11-02 10:41:05', '0', 'Ryan Coogler', 'Chadwick Boseman, Michael B. Jordan, Lupita Nyong''o', 'Black Panther is a 2018 American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 18th film in the Marvel Cinematic Universe (MCU). The film was directed by Ryan Coogler, who co-wrote the screenplay with Joe Robert Cole, and it stars Chadwick Boseman as T''Challa / Black Panther alongside Michael B. Jordan, Lupita Nyong''o, Danai Gurira, Martin Freeman, Daniel Kaluuya, Letitia Wright, Winston Duke, Angela Bassett, Forest Whitaker, and Andy Serkis. In Black Panther, T''Challa is crowned king of Wakanda following his father''s death, but he is challenged by Killmonger (Jordan) who plans to abandon the country''s isolationist policies and begin a global revolution.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/dxWvtMOGAhw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(2, 'Black Widow', 'pics/blackWidow.jpg', '2021-11-02 11:23:32', '0','Cate Shortland','Scarlett Johansson, Florence Pugh, David Harbour, O-T Fagbenle, Olga Kurylenko, William Hurt, Ray Winstone, Rachel Weisz', 'Black Widow is a 2021 American superhero film based on Marvel Comics featuring the character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 24th film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland from a screenplay by Eric Pearson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, Olga Kurylenko, William Hurt, Ray Winstone, and Rachel Weisz. Set after the events of Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Fp9pNPdNwjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(3, 'Archer', 'pics\\archer.jpg', '2021-11-02 11:24:31', '0', '
Valerie Weiss', 'Bailey Noble, Jeanine Mason, Michael Grant Terry, Bill Sage, Dendrie Taylor', "Lauren Pierce has just become the high-school Tri-State Archery Champion. After the competition, Lauren and her teammate Emily return to their hotel room for a night of irresponsible celebratory drinking that grows into more. When interrupted by Emily's abusive boyfriend, Lauren snaps and brutally beats Daniel. Lauren is then sentenced to a girls' reform camp Paradise Ridge, nestled in the mountains of California. But this 'reform camp' turns out to be a corrupt and twisted prison that breaks young girls and keeps parents in the dark. With the help of Rebecca, a strong and provocative young woman whom Lauren befriends, the two escape the unsafe facility and fight for their lives out in the Utah wilderness; a journey of growth, acceptance and resilience of what they believe is right.", '<iframe width="560" height="315" src="https://www.youtube.com/embed/asLDrzHrSeg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(4, 'Joker', 'pics\\joker.jpg', '2021-11-02 11:25:01', '0', 'Todd Phillips', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz, Frances Conroy''o', 'Joker is a 2019 American psychological thriller film directed and produced by Todd Phillips, who co-wrote the screenplay with Scott Silver. The film, based on DC Comics characters, stars Joaquin Phoenix as the Joker and provides a possible origin story for the character. Set in 1981, it follows Arthur Fleck, a failed clown and stand-up comedian whose descent into insanity and nihilism inspires a violent counter-cultural revolution against the wealthy in a decaying Gotham City. Robert De Niro, Zazie Beetz, Frances Conroy, Brett Cullen, Glenn Fleshler, Bill Camp, Shea Whigham, and Marc Maron appear in supporting roles. Joker was produced by Warner Bros. Pictures, DC Films, and Joint Effort, in association with Bron Creative and Village Roadshow Pictures, and distributed by Warner Bros.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/dxWvtMOGAhw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(5, 'Project Power', 'pics\\Project-Power.jpg', '2021-11-02 11:25:50',
 '0', 
 'Henry Joost,Ariel Schulman', 
 'Jamie Foxx, Joseph Gordon-Levitt, Dominique Fishback,Rodrigo Santoro, Colson Baker, Allen Maldonado,Amy Landecker, Courtney B. Vance',
 'Project Power is a 2020 American superhero film[3] directed by Henry Joost and Ariel Schulman, produced by Eric Newman and Bryan Unkeless, and written by Mattson Tomlin. It stars Jamie Foxx, Joseph Gordon-Levitt, and Dominique Fishback, alongside Colson Baker, Rodrigo Santoro, Amy Landecker and Allen Maldonado, and follows a drug dealer, a police officer, and a former soldier who team up to stop the distribution of a pill that gives the user superpowers for five minutes.', 
 '<iframe width="560" height="315" src="https://www.youtube.com/embed/xw1vQgVaYNQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(6, 'Bohemian-Rhapsody', 'pics\\bohemian-rhapsody.jpg', '2021-11-02 11:26:56', '1', 'Bryan Singer', 'Rami Malek, Kucy Boynton, Gwilym Lee, Ben Hardy, Joe Mazzello, Aidan Gillen, Tom Hollander, Mile Myers', 'Bohemian Rhapsody is a 2018 biographical musical drama film directed by Bryan Singer[a] from a screenplay by Anthony McCarten, and produced by Graham King and Queen manager Jim Beach. The film tells the story of the life of Freddie Mercury, the lead singer of the British rock musical band Queen, from the formation of the band up to their 1985 Live Aid performance at the original Wembley Stadium. The film stars Rami Malek as Mercury, with Lucy Boynton, Gwilym Lee, Ben Hardy, Joe Mazzello, Aidan Gillen, Tom Hollander, and Mike Myers in supporting roles. Queen members Brian May and Roger Taylor also served as consultants on the film. A British-American venture, the film was produced by Regency Enterprises, GK Films and Queen Films, with 20th Century Fox serving as distributor.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/mP0VHJYFOAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
(7, 'Free Guy', 'pics\\free-guy.jpg', '2021-11-02 11:26:56' , '1', 'Shawn Levy', 'Ryan Reynolds, Jodie Comer, Lil Rel Howery, Utkarsh Ambudkar, Joe Keery, Taika Waititi',
"Free Guy is a 2021 American science fiction action comedy film directed by Shawn Levy from a screenplay by Matt Lieberman and Zak Penn, and a story by Lieberman. It stars Ryan Reynolds as Guy, a bank teller who discovers he is actually a non-player character in an open-world video game and becomes the hero of the story, trying to save his friends from deletion by the game's creator. Jodie Comer, Joe Keery, Lil Rel Howery, Utkarsh Ambudkar and Taika Waititi also star.",
'<iframe width="560" height="315" src="https://www.youtube.com/embed/X2m-08cOAbc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
(8, 'Venom: Let There Be Carnage', 'pics\\venom.jpg','2021-11-02 11:26:56','1','Andy Serkis',
'Tom Hardy, Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham, Woody Harrelson',
"Venom: Let There Be Carnage is a 2021 American superhero film featuring the Marvel Comics character Venom, produced by Columbia Pictures in association with Marvel. Distributed by Sony Pictures Releasing, it is the second film in Sony's Spider-Man Universe and the sequel to Venom (2018). The film is directed by Andy Serkis from a screenplay by Kelly Marcel, based on a story she wrote with Tom Hardy who stars as Eddie Brock / Venom alongside Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham, and Woody Harrelson. In the film, Brock struggles to adjust to life as the host of the alien symbiote Venom, while serial killer Cletus Kasady (Harrelson) escapes from prison after becoming the host of Carnage, a chaotic spawn of Venom.",
'<iframe width="560" height="315" src="https://www.youtube.com/embed/rrwBnlYOp4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
(9, 'Shang-Chi and the Legend of the Ten Rings' ,'pics\\shangchi.jpg','2021-11-02 11:26:56','1',
'Destin Daniel Cretton',
"Simu Liu, Awkwafina, Meng'er Zhang, Fala Chen, Florian Munteanu, Benedict Wong, Michelle Yeoh,Ben Kingsley,Tony Lenug",
"Shang-Chi and the Legend of the Ten Rings is a 2021 American superhero film based on Marvel Comics featuring the character Shang-Chi. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 25th film in the Marvel Cinematic Universe (MCU). The film was directed by Destin Daniel Cretton, from a screenplay he wrote with Dave Callaham and Andrew Lanham, and stars Simu Liu as Shang-Chi alongside Awkwafina, Meng'er Zhang, Fala Chen, Florian Munteanu, Benedict Wong, Michelle Yeoh, Ben Kingsley, and Tony Leung. In the film, Shang-Chi is forced to confront his past when his father Wenwu (Leung), the leader of the Ten Rings organization, draws Shang-Chi and his sister Xialing (Zhang) into a search for a mythical village.",
'<iframe width="560" height="315" src="https://www.youtube.com/embed/giWIr7U1deA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
(10,'Dune','pics\\dune.jpg','2021-11-02 11:26:56','1',
'Denis Villeneuve',
'Timothee Chalamet, Rebecca Ferguson, Oscar Issac, Josh Brolin, Stellan Skarsgard, Stephen McKinley',
"Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film directed by Denis Villeneuve and written by Villeneuve, Jon Spaihts and Eric Roth. It is the first of a planned two-part adaptation of the 1965 novel by Frank Herbert, primarily covering the first half of the book. Set in the far future, it follows Paul Atreides as his family, the noble House Atreides, is thrust into a war for the dangerous desert planet Arrakis. The ensemble cast includes Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave Bautista, Stephen McKinley Henderson, Zendaya, David Dastmalchian, Chang Chen, Sharon Duncan-Brewster, Charlotte Rampling, Jason Momoa and Javier Bardem.",
'<iframe width="560" height="315" src="https://www.youtube.com/embed/n9xhJrPXop4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
