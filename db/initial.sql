CREATE TABLE `hoges` (
  `hoge_id` int(20) UNSIGNED NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hoges` (`hoge_id`, `created_at`) VALUES
(1, 'yamadatarou'),
(3, 'inoue'),
(4, 'itou');

ALTER TABLE `hoges`
  MODIFY `hoge_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;