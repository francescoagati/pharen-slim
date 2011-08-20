this project is still in alpha.
It will be a startup probject for use pharen with slim, idiorm and paris.

Example with idiorn

```
(orm-config #mysql #127.0.0.1 #db_my #root #root)

(-> (table-for #users)
  (where #id 5)
  (find_one)
)
```

Example with slim

```
  (require-once #slim.php)
  (slim-init)

  
  (slim-get "/books.json" #get-book (one two) 
    (slim-response-with-json [{#ISBN #2323421}{#ISBN #222332} ]))

```

for compile

php <path to pharen> lib/idiorm.phn examples/idiorm.phn 
php <path to pharen> lib/slim.phn examples/slim1.phn 
