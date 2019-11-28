##mysqli_fetch_object()

stdClass Object
( [npid] => 4 [npname] => Telemarket [docurl] =>
https://docs.google.com/a/icreon.com/forms/d/13HAPRmdqZDTs-ivIMI_u9tpyffIKGY461i78ndkFWtU/viewform? [docurl2] => [docurl3] => entry.1561576522=18-FD&entry.1569492719=4&entry.1706324071=Telemarket&entry.451538230=Open&emailReceipt=true ) 

##mysqli_fetch_row()

Array
( [0] => 4 [1] => Telemarket [2] =>
https:
//docs.google.com/a/icreon.com/forms/d/13HAPRmdqZDTs-ivIMI_u9tpyffIKGY461i78ndkFWtU/viewform? [3] => [4] => entry.1561576522=18-FD&entry.1569492719=4&entry.1706324071=Telemarket&entry.451538230=Open&emailReceipt=true ) 

##mysqli_fetch_assoc()

Array
( [npid] => 4 [npname] => Telemarket [docurl] =>
https://docs.google.com/a/icreon.com/forms/d/13HAPRmdqZDTs-ivIMI_u9tpyffIKGY461i78ndkFWtU/viewform? [docurl2] => [docurl3] => entry.1561576522=18-FD&entry.1569492719=4&entry.1706324071=Telemarket&entry.451538230=Open&emailReceipt=true ) 

##mysqli_fetch_array()

Array
( [0] => 4 [npid] => 4 [1] => Telemarket [npname] => Telemarket [2] =>
https://docs.google.com/a/icreon.com/forms/d/13HAPRmdqZDTs-ivIMI_u9tpyffIKGY461i78ndkFWtU/viewform? [docurl] =>
https://docs.google.com/a/icreon.com/forms/d/13HAPRmdqZDTs-ivIMI_u9tpyffIKGY461i78ndkFWtU/viewform? [3] => [docurl2] => [4] => entry.1561576522=18-FD&entry.1569492719=4&entry.1706324071=Telemarket&entry.451538230=Open&emailReceipt=true [docurl3] => entry.1561576522=18-FD&entry.1569492719=4&entry.1706324071=Telemarket&entry.451538230=
Open&emailReceipt=true ) 


13:28:57	select t1.* from addresses t1  inner join  (select user_id from addresses group by user_id having count(user_id) > 1) t2  on t1.user_id = t2.user_id  where t1.id < t2.id LIMIT 0, 200	Error Code: 1054. Unknown column 't2.id' in 'where clause'	0.00023 sec
