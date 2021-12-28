## Part 2: SELECTING EVERYTHING FROM A TABLE

Occasionally you may want to retrieve all the information in a table. If you want to list everything in the Product table, you could write:

```sql
SELECT ProductNum, Descr, Type, MSRP, OnHand
    FROM Product;
```

If the table in question happened to have ten or twelve fields, writing a statement such as this would be quite tedious and subject to typing errors or errors of omission. SQL provides a short form of selecting all the fields in a table:

```sql
SELECT *
    FROM Products;
```

When the asterisk appears in place of field names, it must appear by itself. You cannot combine the asterisk with other field names. The asterisk means "every field in the table".
