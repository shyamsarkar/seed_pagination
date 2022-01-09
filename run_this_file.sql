-- Database: `test`

CREATE TABLE `number_word` (
  `id` int(11) NOT NULL,
  `numbr` varchar(20) NOT NULL,
  `in_words` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `number_word`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `number_word`
--
ALTER TABLE `number_word`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `number_word`
--
ALTER TABLE `number_word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
