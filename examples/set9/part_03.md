## Part 3: ELIMINATING DUPLICATE DATA

Consider the question "In which cities do our customers live?" Such information might be useful in a marketing survey or in preparation for a mailing promotion. To determine the answer we identify the table, the field in question and arrive at the query:

```sql
SELECT City
    FROM Customer;
```

Unfortunately, this query yields one city name for every row in the Customer table. if the table has 2,500 customers living in 27 cities, this query will return 2,500 city names, with lots of duplicates. Ideally, we want the names of each city to appear once.

SQL provides the keyword DISTINCT in the SELECT clause.

The use of DISTINCT ensures that no duplicate rows appear in the result set. Changing our query to:

```sql
SELECT DISTINCT City
    FROM Customer;
```

yields the desired result. Note that the names appear in alphabetical order. Why do you think this is so?
