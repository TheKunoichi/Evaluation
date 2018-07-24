SELECT id_articles, id_users
FROM articles INNER JOIN users
ON id_articles = id_users
