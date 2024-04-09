### 1-Seleziona gli utenti che hanno postato almeno un video (25)

SELECT U.id
, U.username
, COUNT(M.path) as totalVideos
FROM `users` U
JOIN `medias` M ON M.user_id = U.id
WHERE M.type = 'Video'
GROUP BY U.id
, U.username
ORDER BY totalVideos DESC
, U.id;

<hr>

### 2-Seleziona tutti i post senza Like (13)

SELECT DISTINCT P.id
, P.title
FROM `posts` P
LEFT JOIN `likes` L ON L.post_id = P.id
WHERE L.post_id IS NULL
ORDER BY P.id;

<hr>

### 3-Conta il numero di like per ogni post (175-con post non più esistenti in `Posts`, 152-con post esistenti)

SELECT L.post_id
, P.title
, COUNT(L.post_id) AS totalLikes
FROM `likes` L
LEFT JOIN `posts` P ON P.id = L.post_id
GROUP BY L.post_id
, P.title
ORDER BY totalLikes DESC
, L.post_id;

SELECT L.post_id
, P.title
, COUNT(L.post_id) AS totalLikes
FROM `likes` L
JOIN `posts` P ON P.id = L.post_id
GROUP BY L.post_id
, P.title
ORDER BY totalLikes DESC
, L.post_id;

<hr>

### 4-Ordina gli utenti per il numero di media caricati (25)

SELECT U.id
,U.username
, COUNT(M.path) AS totalMediaLoaded
FROM `users` U
JOIN `medias` M ON M.user_id = U.id
GROUP BY U.id
,U.username
ORDER BY totalMediaLoaded DESC
,U.id;

<hr>

### 5-Ordina gli utenti per totale di likes ricevuti nei loro posts (25)

SELECT U.id
, U.username
, COUNT(L.post_id) AS totalReceivedLikes
FROM `users` U
JOIN `posts` P ON P.user_id = U.id
JOIN `likes` L ON L.post_id = P.id
GROUP BY U.id
, U.username
ORDER BY totalReceivedLikes DESC
, U.id
