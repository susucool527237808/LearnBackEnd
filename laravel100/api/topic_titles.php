<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/5/30
 * Time: 16:07
 */
$topic_string = <<<EOF
1、给你四个坐标点，判断它们能不能组成一个矩形，如判断([0,0],[0,1],[1,1],[1,0])能组成一个矩形。
2、写一段代码判断单向链表中有没有形成环，如果形成环，请找出环的入口处，即P点
3、写一个函数，获取一篇文章内容中的全部图片，并下载
4、获取当前客户端的IP地址，并判断是否在（111.111.111.111,222.222.222.222)
5、nginx的log_format配置如下：<img src='/laravel100/api/images/QQ截图20180530171617.png'> a、列出“request_time”最大的20行？b、列出早上10点访问量做多的20个url地址？
6、什么是CSRF攻击？XSS攻击？如何防范？
7、应用中我们经常会遇到在user表随机调取10条数据来展示的情况，简述你如何实现该功能。
8、从扑克牌中随机抽5张牌，判断是不是一个顺子，即这5张牌是连续的
9、两条相交的单向链表，如何求它们的第一个公共节点
10、最长公共子序列问题LCS，如有[1,2,5,11,32,15,77]和[99,32,15,5,1,77]两个数组，找到它们共同都拥有的数，写出时间复杂度最优的代码，不能用array_intersect（这里有坑，需要去研究一下动态规划）。
11、linux的内存分配和多线程原理
12、MYSQL中主键与唯一索引的区别
13、http与https的主要区别
14、http状态码及其含意
15、linux中怎么查看系统资源占用情况
16、SQL注入的原理是什么？如何防止SQL注入
17、isset(null) isset(false) empty(null) empty(false)输出
18、优化MYSQL的方法
19、数据库中的事务是什么？
20、写一个函数，尽可能高效的从一个标准URL中取出文件的扩展名
21、参数为多个日期时间的数组，返回离当前时间最近的那个时间
22、echo、print、print_r的区别
23、http协议的header中有哪些key及含义
24、二叉树前中后遍历代码
25、PHP的数组和C语言的数组结构上有何区别？
26、Redis的跳跃表怎么实现的
27、哈希是什么？hash冲突后，数据怎么存？
28、聚簇索引，聚集索引的区别？
29、B+Tree是怎么进行搜索的
30、数组和hash的区别是什么？
31、写个函数，判断下面扩号是否闭合，左右对称即为闭合： ((()))，)(())，(())))，(((((())，(()())，()()
32、 找出数组中不重复的值[1,2,3,3,2,1,5]
33、32题你的时间复杂度是多少？有的情况下，你写了个算法，然后面试官会让你把你的算法的时间复杂度表达式写出来
34、PHP的的这种弱类型变量是怎么实现的？
35、在HTTP通讯过程中，是客户端还是服务端主动断开连接？
36、PHP中发起http请求有哪几种方式？它们有何区别？
37、有一颗二叉树，写代码找出来从根节点到flag节点的最短路径并打印出来，flag节点有多个。比如下图这个树中的6和14是flag节点，请写代码打印8、3、6 和 8、10、14两个路径 <img src='/laravel100/api/images/QQ截图20180530172346.png'>
38、有两个文件文件，大小都超过了1G，一行一条数据，每行数据不超过500字节，两文件中有一部分内容是完全相同的，请写代码找到相同的行，并写到新文件中。PHP最大允许内内为255M。
39、请写出自少两个支持回调处理的PHP函数，并自己实现一个支持回调的PHP函数
40、请写出自少两个获取指定文件夹下所有文件的方法（代码或思路）。
41、请写出自少三种截取文件名后缀的方法或函数（PHP原生函数和自己实现函数均可）
42、PHP如何实现不用自带的cookie函数为客户端下发cookie。对于分布式系统，如何来保存session值。
43、请用SHELL统计5分钟内，nginx日志里访问最多的URL地址，对应的IP是哪些？
44、写一段shell脚本实现备份mysql指定库（如test)到指定文件夹并打包，并删除30天前的备份，然后将新的备份推送到远端服务器，完成后送邮件通知。
45、mysql数据库中innodb和myisam引擎的区别
46、从用户在浏览器中输入网址并回车，到看到完整的见面，中间都经历了哪些过程。
47、如何分析一条sql语句的性能。
48、ping一个服务器ping不通，用哪个命令跟踪路由包？<img src='/laravel100/api/images/QQ截图20180530172544.png'>
49、\$a=[0,1,2,3]; \$b=[1,2,3,4,5]; \$a+=\$b; var_dump(\$a)等于多少？
50、\$a=[1,2,3]; foreach(\$a as &\$v){} foreach(\$a as \$v){} var_dump(\$a)等于多少; (我加的)
51、数据库中的存放了用户ID,扣费很多行，redis中存放的是用户的钱包，现在要写一个脚本，将数据库中的扣费记录同步到redis中，每5分钟执行一次。请问要考虑哪些问题？
52、MYSQL主从服务器，如果主服务器是innodb引擎,从服务器是myisam引擎，在实际应用中，会遇到什么问题？
53、linux中进程信号有哪些？
54、redis的底层实现
55、异步模型
56、10g文件，用php查看它的行数
57、有10亿条订单数据，属于1000个司机的，请取出订单量前20的司机
58、设计一个微信红包的功能
59、根据access.log文件统计最近5秒的qps，并以如下格式显示，01 1000（难点在01序号）
60、php7性能为什么提升这么高
61、遍历一个多维数组
62、有这样一个字符串abcdefgkbcdefab......随机长度，写一个函数来求bcde在这个字符串中出现的次数
63、有一个1G大小的一个文件，里面每一行是一个词，词的大小不超过16个字节，内存限制大小是1M。返回频数最高的100个词
64、十道海量数据处理面试题与十个方法大总结（我加的）<img src='/laravel100/api/images/QQ截图20180530173558.png'>
65、php进程模型，php怎么支持多个并发
66、nginx的进程模型，怎么支持多个并发
67、php-fpm各配置含义，fpm的daemonize模式 <img src='/laravel100/api/images/QQ截图20180530173716.png'>
68、让你实现一个简单的架构，并保持高可用，两个接口，一个上传一条文本，一个获取上传的内容，你怎么来设计？要避免单机房故障，同时要让代码层面无感。
69、两台mysql服务器，其中一台挂了，怎么让业务端无感切换，并保证正常情况下讲台服务器的数据是一致的
70、http协议具体的定义
71、什么是锁，怎么解决锁的问题
72、rand与mt_rand的区别
73、mysql事务隔离是怎么实现的
74、mysql的锁怎么实现的
75、对称加密和非对称加密的方式
76、10瓶水，其中一瓶有毒，小白鼠喝完有毒的水之后,会在24小时后死亡,问:最少用几只小白鼠可以在24小时后找到具体是哪一瓶水有毒。
77、redis是如何进行同步的，同步的方式，同步回滚怎么办，数据异常怎么办，同时会问MYSQL的同步方式和相关异常情况
78、怎么解决跨域
79、json和xml区别,各有什么优缺点
80、Trait优先级
81、a引用b，报错c里面类重复定义，循环引用会出现什么问题
82、下面员工3的薪水大于其主管的薪水，一条SQL找到薪水比下属低的主管 <img src='/laravel100/api/images/QQ截图20180530173759.png'>
821、在一个坐标系内有一个N个点组成的多边形,现在有一个坐标点,写代码或思路来判断这个点是否处于多边形内
83、数据库如果出现了死锁,你怎么排查,怎么判断出现了死锁?
84、写一个一个程序来查找最长子串
85、分析一个问题:php-fpm的日志正常,但客户端却超时了,你认为可能是哪里出了问题,怎么排查?
86、nginx的工作流程是什么样的,可以画图描述
87、进程间通信方式有哪些
88、主从复制，从服务器会读取到主服务器正在回滚的数据吗？主数据库写成功，从服务器因为一些原因写失败，最后会出现什么情况？主从复制如果键冲突怎么办？
89、事务有几种隔离级别？事务的隔离级别是怎么实现的?
90、什么是B+数,请画b+树的结构
91、mysql中的字符集，客户端与数据库不一致，怎么办? MYSQL中字符串到显示到界面,字符转换的过程是怎样的？数据库中的字符集是latin1,你现在将utf8的字符串存到latin1字符集的数据库表,你能将utf8的字符串存进去吗？假如你说能存,追问:能否恢复?假如能,那怎么恢复?
92、写一段代码，找到所有子集合，如[a,b,c]的子集合有{},{a},{b},{c},{ab},{ac},{abc}
93、['a'=>200,'b'=>100,'c'=>100],写一个自定义排序函数，按值降序,如果值一样，按键排序
94、设计一个缓存系统，可以定期或空间占满之后自动删除长期不用的数据，不能使用用遍历。
我当时的答案是用链表来存,缓存命中就将该缓存移到链表头,然后链表尾就都是冷数据了。
我记得之前是在哪里看过这个设计,但我忘记在连接了,请知道朋友的把连接贴上来。
95、==和===的区别，写出以下输出："aa"==1,"bb"==0，1=="1"
96、一个排序好的数组,将它从中间任意一个位置切分成两个数组,然后交换它们的位置并合并，合并后新数组元素如:20,21,22,25,30,1,2,3,5,6,7,8,15,18,19,写一个查询函数来查找某个值是否存在。
97、设计一个树形结构，再写一个函数对它进行层序遍历
98、'\$var'和"\$var"的区别
99、self和static的区别
100、PHP的协程以及用途
101、描述autoload的机制
102、mysql中字段类型各占几个字节：smallint、int、bigint、datetime、varchar(8)
103、哪些属性唯一确定一条TCP连接
104、myisam和innodb的区别，为什么myisam比innodb快，myisam和innodb的索引数据结构是什么样的?innodb主键索引和非主键索引的区别?其索引上存放的数据是什么样的？
105、断开TCP连接时，timewait状态会出现在发起分手的一端还是被分手的一端
106、AWK各种数据分析考得非常多，要多练习，题目不再一一写了
107、redis中集合、有序集合、hyperLog、hash的数据结构是啥样的
108、描述一下:一个请求到达nginx的全部处理过程（nginx自身会调用哪些逻辑）、然后怎么与php通信，中间的流程是什么样的等等？
109、nginx和php-fpm的相关配置,随便问里面各种参数啥意思
110、假如有一张地图,如下图,"-"代表海洋、"+"代表陆地,用你最擅长的方式,取出陆地的坐标。 <img src='/laravel100/api/images/QQ截图20180530173920.png'> 比如上图在数组中表示成,1表示成陆地,0表示海洋: <img src='/laravel100/api/images/QQ截图20180530173933.png'> 写个算法取出所有陆地的坐标,并按块放到一起,如地图上左上角第一个陆地的坐标是: <img src='/laravel100/api/images/QQ截图20180530173949.png'>
EOF;
$number = isset($_GET['number'])?$_GET['number']:null; // 第几题
$topic_array = preg_split('#\n+#',$topic_string);
$topic_array = array_filter($topic_array,function($value){
    return trim($value) !== "";
});
$topic_array = array_map(function($value){
    return trim($value);
},$topic_array);
if( $number ){
    foreach( $topic_array as $k=>$v ){
        if( preg_match('/^('.$number.')、*/', trim($v), $matches) ){
            $json = array('id'=>1,'data'=>$v);
            echo json_encode($json);break;
        }
    }
} else {
    $topic_array_multi = array();
    foreach( $topic_array as $k=>$v ){
        if( preg_match('/^(\d+)、*/', trim($v), $matches) ){
            $topic_array_multi[] = array('id'=>$matches[1],'data'=>$v);
        }
    }
    echo json_encode($topic_array_multi);
}

