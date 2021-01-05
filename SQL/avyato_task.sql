--
-- Database: `avyato_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE TABLE `admin` (
  `admin_id` int(25) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ;

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);


ALTER TABLE `admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(25) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `user`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;


-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--
 
create table user_details
(
    id int AUTO_INCREMENT primary key,
    user_id int not null,
    foreign key(user_id)references user(user_id),
	Timingfrom varchar(150),
	Timingto varchar(150),
	clinic varchar(150),
    work_pending varchar(150),
    mc_doctor varchar(150),
	mc_clinic varchar(150),
	approval varchar(150)
);
INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES (NULL, 'Admin', 'A');

