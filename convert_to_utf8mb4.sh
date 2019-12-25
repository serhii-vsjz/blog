DB="blog_db"
USER="rootdev"
PASS="root04pass14"
(
    echo 'ALTER DATABASE `'"$DB"'` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;'
    mysqli -p$PASS -u $USER "$DB" -e "SHOW TABLES" --batch --skip-column-names \
    | xargs -I{} echo 'ALTER TABLE `'{}'` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;'
) \
| mysql -p$PASS -u $USER "$DB"
