#SKD101|hw-php-6-films|1|2018.06.27 20:45:50|7|7

DROP TABLE IF EXISTS `films`;
CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `genre` text NOT NULL,
  `year` text NOT NULL,
  `description` text NOT NULL,
  `photo` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 /*!40101 DEFAULT CHARSET=utf8 */;

INSERT INTO `films` VALUES
(12, 'Гладиатор ', 'боевик, драма', '2000', 'В великой Римской империи не было военачальника, равного генералу Максимусу. Непобедимые легионы, которыми командовал этот благородный воин, боготворили его и могли последовать за ним даже в ад.', '18171081.jpg'),
(13, 'Три билборда', 'драма', '2017', 'Спустя несколько месяцев после убийства дочери Милдред Хейс преступники так и не найдены. Отчаявшаяся женщина решается на смелый шаг, арендуя на въезде в город три биллборда с посланием к авторитетному главе полиции Уильяму Уиллоуби. Когда в ситуацию оказывается втянут еще и заместитель шерифа, инфантильный маменькин сынок со склонностью к насилию, офицер Диксон, борьба между Милдред и властями города только усугубляется.', '24710693.jpg'),
(14, 'Терминатор - 2', 'боевик, фантастика', '1992', 'Прошло более десяти лет с тех пор, как киборг-терминатор из 2029 года пытался уничтожить Сару Коннор — женщину, чей будущий сын выиграет войну человечества против машин.', '17319641.jpg'),
(15, 'Грань будущего', 'боевик, фантастика', '2014', 'История разворачивается в недалеком будущем, когда похожая на рой раса инопланетян, названных мимиками, совершает безжалостное нападение на Землю, стерев в пыль крупные города и уничтожив миллионы жизней. Армии Земли объединят силы, чтобы вступить в последний бой с полчищами инопланетян, зная, что второго шанса у них не будет.', '68079223.jpg'),
(22, 'Такси ', 'Комедия, боевик', '1998', '«Такси» — французский кинофильм, сочетающий в себе элементы кинокомедии, боевика, приключенческого фильма и детектива. Фильм породил одну из самых коммерчески успешных франшиз во Франции, чьи сборы в мировом прокате превысили 300 млн долларов.', '10497131.jpg'),
(25, 'Большой куш', 'Криминальная комедия', '2001', 'Четырехпалый Френки должен был переправить краденый алмаз из Англии в США своему боссу Эви. Но вместо этого герой попадает в эпицентр больших неприятностей. Сделав ставку на подпольном боксерском поединке, Френки попадает в круговорот весьма нежелательных событий.', '71916198.jpg'),
(26, 'Властелин колец', 'фантастика, боевик', '2001', 'Сказания о Средиземье — это хроника Великой войны за Кольцо, войны, длившейся не одну тысячу лет. Тот, кто владел Кольцом, получал власть над всеми живыми тварями, но был обязан служить злу.', '34812622.jpg');

