CREATE TABLE `patologia` (
  `idPatologia` int(11) NOT NULL,
  `nombrePatologia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO patologia(`idPatologia` ,`nombrePatologia`) VALUES 
(1, 'asma'),
(2, 'dolor de oido'),
(3, 'problemas pulmonar');

ALTER TABLE `patologia`
  ADD PRIMARY KEY (`idPatologia`);

ALTER TABLE `patologia`
  MODIFY `idPatologia` int(11) NOT NULL AUTO_INCREMENT;
