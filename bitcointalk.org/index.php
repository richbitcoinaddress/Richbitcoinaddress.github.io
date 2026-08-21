
August 21, 2026, 09:48:50 AM *
Welcome, Guest. Please login or register.
News: Latest Bitcoin Core release: 31.1 [Torrent]	
 
  
 	 	Home	 	Help	Search	Login	Register	More	 
Bitcoin Forum > Other > Off-topic > z
Pages: « 1 2 3 4 5 6 7 8 9 10 [11] 12 13 »  All	
« previous topic next topic »
Print
	Author	Topic: z  (Read 58578 times)
chriswilmer
Legendary
*


Activity: 1008
Merit: 1000


View Profile WWW
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 02:30:31 AM
 #201
Update after the crash would be nice!
hyh
Full Member
***


Activity: 182
Merit: 100



1XGKpTag3kNJeeFtsnTYs6TfvWvgG2DtR


View Profile
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 02:44:02 AM
 #202
Quote from: chriswilmer on April 17, 2013, 02:30:31 AM
Update after the crash would be nice!

I used the tool developed by Znort987 and got a top 40000 list here: http://goo.gl/4u7bG

5MB file, to large to paste.
BTC: 1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK

XRP: rno91tGDJeRcnM7EMXj8KG9UTyxRGMMz8s
finway
Hero Member
*****


Activity: 714
Merit: 500


View Profile
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 05:47:16 AM
 #203
Quote from: znort987 on April 10, 2013, 03:54:19 PM
Quote from: Impaler on April 10, 2013, 07:29:42 AM
Quote from: hyphymikey on April 10, 2013, 06:13:38 AM
http://blockchain.info/fb/1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK

I believe this address would be high on the list if it wasn't "cleared out".  I believe this one belongs to Satoshi because the oldest transaction was 3 days into bitcoin's existence. It seems a lot of mining rewards from the very early days were sent here. I tried to follow the money, but bitcoin did its job and led me nowhere.

Znort, how about running the closure and 'taint' tools on this address, that would at-least give a broad-brush generalization of if these coins were scattered to the wind or stayed consolidated, I suspect it would be the former as people were much loser with BTC back then when it was really worth nothing.

Very interesting address, and very interesting closure.
The closure is fairly large (around 393 addresses).

The earliest TX into the closure is a block mined on 2009-01-13.

(Interestingly, that is earlier than the first TX into the address given:
one of the nice property of the closure tool is that you can sort of travel
back in time.)

After that there are a whole bunch of BTC50 TX paying into the
closure (likely mining revenue, didn't bother to check that they
were actual block mined type tx). The owner is definitely a very
early miner.

The balance for the closure peaks at BTC95k around mid-2011.

Either the owner decided to cash out at that time, or he decided to
spread his coins to addresses outside of the closure to be less "visible"

Transactions in or out of the closure are nicely spread over the range [2009-today].

Latest TX in or out of the closure is from 2013-04-04 which seems to
indicate that our miner is still alive and well Smiley

To get a vague idea of where the money went, I ran a taint analysis of TX
paying out of the closure.

Because of how early this closure starts, it almost taints *every* TX in the
chain, so I chose to only keep TX whose output is tainted by more than 75%
by the closure.

That's about 2028 transactions, involving about 5000 addresses. I computed
the balance for all of these, and ... the outcome is very interesting  Grin


What's the interesting thing ? 
Tips welcome: 1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK
Fuyuki_Wataru
Member
**


Activity: 167
Merit: 10




View Profile
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 09:32:29 AM
 #204
What does ''Mon Apr 16 14:30:24 2012'' the time mean? Last logged in to wallet, last transaction, or time the tool officially updated it?

▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬    delicia | delicia.io    ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
Decentralized Global Food Network | World's Only Solution to Food Wastage | Join Whitelist Now, Get 30% Bonus
▬▬▬▬▬▬▬▬▬▬    Whitepaper | Telegram | Medium | Twitter | FB | ANN    ▬▬▬▬▬▬▬▬▬▬
Impaler
Sr. Member
****


Activity: 826
Merit: 250

CryptoTalk.Org - Get Paid for every Post!


View Profile
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 10:42:05 AM
 #205
Sergio seems to have developed a new methodology of grouping early mining

https://bitcointalk.org/index.php?topic=178629.0

The 'entity' (certainly Satoshi if his methodology is correct) would dwarf the currently largest wallet by an order of magnitude.  I'm interested in seeing how if his new methodology can be combined with the conventional closure method to reveal even larger sums.
 
                                . ██████████.
                              .████████████████.
                           .██████████████████████.
                        -█████████████████████████████
                     .██████████████████████████████████.
                  -█████████████████████████████████████████
               -███████████████████████████████████████████████
           .-█████████████████████████████████████████████████████.
        .████████████████████████████████████████████████████████████
       .██████████████████████████████████████████████████████████████.
       .██████████████████████████████████████████████████████████████.
       ..████████████████████████████████████████████████████████████..
       .   .██████████████████████████████████████████████████████.
       .      .████████████████████████████████████████████████.
       .       .██████████████████████████████████████████████
       .    ██████████████████████████████████████████████████████
       .█████████████████████████████████████████████████████████████.
        .███████████████████████████████████████████████████████████
           .█████████████████████████████████████████████████████
              .████████████████████████████████████████████████
                   ████████████████████████████████████████
                      ██████████████████████████████████
                          ██████████████████████████
                             ████████████████████
                               ████████████████
                                   █████████	CryptoTalk.org	|	 
MAKE POSTS AND EARN BTC!	🏆
hyh
Full Member
***


Activity: 182
Merit: 100



1XGKpTag3kNJeeFtsnTYs6TfvWvgG2DtR


View Profile
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 03:21:22 PM
 #206
Quote from: znort987 on April 17, 2013, 03:10:38 PM

If you pull the latest from github, I've added a couple of fields
in the output of allBalances that do what you want:

nbIn, lastIn, nbOut, lastOut

For the less than 1% part, a dumb awk filter can do it with the
new fields.


Thanks so much. You rock!
BTC: 1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK

XRP: rno91tGDJeRcnM7EMXj8KG9UTyxRGMMz8s
hyh
Full Member
***


Activity: 182
Merit: 100



1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK


View Profile
	
Re: Bitcoin 410 richest addresses, updated often.
April 17, 2013, 03:59:12 PM
 #207
Quote from: znort987 on April 17, 2013, 03:10:38 PM

If you pull the latest from github, I've added a couple of fields
in the output of allBalances that do what you want:

nbIn, lastIn, nbOut, lastOut

For the less than 1% part, a dumb awk filter can do it with the
new fields.


I just tried, it works great. Actually what I wanted is Amount_In, Amount_Out, but I can do that on my own.

One can find some interesting information from this:

E.g. The address with Hash-160 `12d5a845f2b212ce0c3bd65a4035881d9219090e` was last touched on 2012-10-23 03:33:21, however, the last transaction out was on 2010-07-24 23:35:23. It could happen that the private key to these 31,000 BTC is lost after this.  Grin
BTC: 1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK

XRP: rno91tGDJeRcnM7EMXj8KG9UTyxRGMMz8s
hyh
Full Member
***


Activity: 182
Merit: 100



1Myy4QCu9zWESRHrVZBusN6g9bS5G7L5UK


View Profile
	
Re: z
April 22, 2013, 09:03:34 PM
 #208
What happened to the title of the post?

z?
BTC: 1XGKpTag3kNJeeFtsnTYs6TfvWvgG2DtR

XRP: rno91tGDJeRcnM7EMXj8KG9UTyxRGMMz8s
Impaler
Sr. Member
****


Activity: 826
Merit: 250

CryptoTalk.Org - Get Paid for every Post!


View Profile
	
Re: z
April 23, 2013, 04:20:51 AM
 #209
Looks to me that a mod felt that publishing a list of the wealthiest addresses was "class warfare".  Certainly hope he's continues investigating the block-chain, knowing the macro-structure of the block-chain can only be useful for genuine supporters of the crypto-currency concept.
 
                                . ██████████.
                              .████████████████.
                           .██████████████████████.
                        -█████████████████████████████
                     .██████████████████████████████████.
                  -█████████████████████████████████████████
               -███████████████████████████████████████████████
           .-█████████████████████████████████████████████████████.
        .████████████████████████████████████████████████████████████
       .██████████████████████████████████████████████████████████████.
       .██████████████████████████████████████████████████████████████.
       ..████████████████████████████████████████████████████████████..
       .   .██████████████████████████████████████████████████████.
       .      .████████████████████████████████████████████████.
       .       .██████████████████████████████████████████████
       .    ██████████████████████████████████████████████████████
       .█████████████████████████████████████████████████████████████.
        .███████████████████████████████████████████████████████████
           .█████████████████████████████████████████████████████
              .████████████████████████████████████████████████
                   ████████████████████████████████████████
                      ██████████████████████████████████
                          ██████████████████████████
                             ████████████████████
                               ████████████████
                                   █████████	CryptoTalk.org	|	 
MAKE POSTS AND EARN BTC!	🏆
Phinnaeus Gage
Legendary
*


Activity: 1918
Merit: 1570



Bitcoin: An Idea Worth Spending


View Profile WWW
	
Re: z
April 23, 2013, 06:23:17 AM
 #210
Since I don't see any official reason as to why the OP was edited, here it is again:

Code:
111111.11257544 582431b9e63d2394c8b224d1bc45d07ae95d2379 1933phfhK3ZgFQNLGSDXvqCn32k2buXY8a Tue Feb 12 04:31:31 2013
          79957.04210000 a0b0d60e5991578ed37cbda2b17d8b2ce23ab295 1FeexV6bAHb8ybZjqQMjJrcCrHGW9sb6uF Fri Jan 25 15:36:18 2013
          53880.04210000 a82d63de690d6e71f98a2991249310f6a3d9cb88 1GLEtzJ1H2zoGrUA4RMbRJam5UJSdrk6T2 Fri Feb  1 06:04:48 2013
          53000.04210000 3d9e561f21d312f9b8b46e74169263e2452d5591 16cou7Ht6WjTzuFyDBnht9hmvXytg6XdVT Fri Jan 25 15:36:18 2013
          50000.04110001 863ec44fbf7c9ed0819b52f275006b22ba781794 1DEpjpftLbsGiCJvJDp2F2quVRnymV8U5Q Thu Mar 14 18:25:14 2013
          50000.04110000 f1c87a5e8ff7d14e74b858089bf771c94b1b6db4 1P3S1grZYmcqYDuaEDVDYobJ5Fx85E9fE9 Tue Oct 23 03:35:41 2012
          47458.04110000 6fbe1851f5d1de5477d147e93b3da5c0c98f4e8e 1BBqjKsYuLEUE9Y5WzdbzCtYzCiQgHqtPN Tue Oct 23 03:35:41 2012
          46880.15410977 816115944e077fe7c803cfa57f29b36bf87c1d35 1Co6UHJmGHevWEHAPraSPRVkfGgG46EHwe Wed Mar 20 11:49:04 2013
          44864.20534842 e552a6a2afa8ae80a773dc9bb95f8c25c5b3bdd3 1MuYkciQTfRsU94ReAe5MiAfUpCrbLBcFR Mon Feb 25 18:08:18 2013
          42660.49317786 184a06d01d290d3d68d38d11aec79c77e054bb6c 13DRu4fXZ7gr8pykRVKwwStPUnUvfhMXJS Mon Mar 11 09:07:44 2013
          40000.31337000 76e33a4c4656febfd977925a82c2e381a574ab86 1BqcwhKevdBKeos72b8E32Swjrp4iDVnjP Tue Jan 29 06:50:31 2013
          40000.04115000 06b7e90bb7a54137beb01c87119a3cd9061d7d52 1cXNTyXj4xPGopfYZNY5xfSM1EPJJvBZV Tue Feb 26 15:19:00 2013
          40000.04110000 0e1d5b7a760ddc32481d9cfc6062107624bac625 12HddUDLhRP2F8JjpKYeKaDxxt5wUvx5nq Tue Oct 23 03:35:41 2012
          40000.04110000 3a9a59b996775fbfec889caf30d58368fb368c0e 16Ls6azc76ixc9Ny7AB5ZPPq6oiEL9XwXy Tue Oct 23 03:35:41 2012
          38000.04110000 4ff9d8d6614b1da5b3e46ef51c61a544626bf6e5 18Hsgq92AUB1PYLU6MUMQXiwdebaDRo9oQ Tue Oct 23 03:35:41 2012
          37620.07483673 a235c56e106baeeefc2b02bb82643179f89664f1 1FngtAcZsLfK89MNe7TqzyqVtSype8TiVD Thu Mar 14 10:07:58 2013
          35251.49398730 5ac1f0c5f3a32251d496bd987026cc240448e43e 19Gt9VKmmyMpMHEv6dkf8ddwmwddoSoJ8w Sat Mar  2 02:46:16 2013
          31000.04110000 12d5a845f2b212ce0c3bd65a4035881d9219090e 12ib7dApVFvg82TXKycWBNpN8kFyiAN1dr Tue Oct 23 03:35:41 2012
          30904.00000000 fe0c68e8a74f730aa33487958bfc923f9e6f66b5 1QAHVyRzkmD4j1pU5W89htZ3c6D6E7iWDs Tue Mar 19 12:23:00 2013
          30400.60000000 740da5278769cb7d59bd99995aeffa2efc1f211d 1BadjLJqb2CB73t3ZJ296xrwhHNhyo5JaU Mon Mar  4 17:11:34 2013
          30000.04110000 e6071c924e820f01ac64ed98ec739235e6a2f089 1MyGwFAJjVtB5rGJa32M6Yh46cGirUta1K Tue Oct 23 03:35:41 2012
          30000.00000000 14b31873a05e0dd40023e7451e1a799b61310544 12tT4cSjRRsncwwv1YUKnbXuouaMfT5DnN Sat Feb  2 09:41:11 2013
          29057.52943680 b9bed94361ad0922d2e1b2a4e692375765fe13b9 1Hw8dtVC9bdxDz1su9Jx3GXTgjR75FJcMK Tue Mar 19 07:56:50 2013
          28150.04110000 14c1ed72d09150b8e5f49d94d53070d2c1f1db36 12tkqA9xSoowkzoERHMWNKsTey55YEBqkv Tue Oct 23 03:35:41 2012
          26167.04110000 cca3c586bd6033cf56426f69f3fa2719d0ffbabb 1Kf33BbrJDuAVC91w9ACtRgf6KJrLWSkHV Tue Oct 23 03:35:41 2012
          25919.16154308 4703413cd7f483aa14d729acb5c35fddb6907913 17UUsmejDsjJEtbRcotd289ADp7ZdanH5k Wed Mar 13 16:05:18 2013
          24787.43000000 7459a93a1de9e506996b52c2d63b031af32192e0 1BcCo1dNztEjMtzxFTbtQuZEuK1NkvN8q5 Mon Mar 18 14:13:31 2013
          24404.50460000 501307b47105fe0cc465483596fddb0efab36ecf 18JPragfuDVHWWG8ABQ15cghJFetnXUjBD Sat Nov 24 01:22:16 2012
          23249.04110000 1242a9c6ac1267fbd1b72a2bb7bc019cbac15968 12fZ2HxkLjG9zn1u44XYsFFYKHM4A2zCea Tue Oct 23 03:35:41 2012
          22013.04110000 6f6fd9a784dea3a60b620fcdd0831a68e5453de8 1BADznNF3W1gi47R65MQs754KB7zTaGuYZ Tue Oct 23 03:35:41 2012
          21015.84770000 d0ecb2322d94cf5e3250dfc2f7257e23f1adb30c 1L3h6qHiJZUD8bYD3HfqfoD3ryg7Eg1SU5 Fri Jan  4 07:55:22 2013
          20732.10151781 98c2268aaca9df0aa14a87e893f6b16e50274df0 1EviHyZV5iRMjBy2z3e39bK2PMUH5LifuN Fri Feb  8 10:25:08 2013
          20367.59037095 a3015708533f2fd3a3409bfff0ab1437f8704a12 1FrtkNXastDoMAaorowys27AKQERxgmZjY Tue Mar 19 11:24:46 2013
          20250.00000000 7c9c0dfd13bf823da0536a97c7a6c69b6a9074c9 1CMsjeusmGie3KiErRmVaQ879NwjddFoJb Wed Mar 20 07:37:15 2013
          20000.00000000 4983563fc095f08dc3f063f4be7b1fdfa3401ac7 17hhfTDxPerM23HPwLSYmdmvU94KCoKLMi Tue Mar  5 08:09:00 2013
          19940.00000000 a64337d383b9e9018b1b6f4d6607afb7f449917e 1GA7hEmKv9L2mh5NCfgnLFufAb7bEMdnNS Wed Mar 20 15:46:46 2013
          19414.39680740 f8753559cd673046044baf06725c7a94bcb8a592 1PeizMg76Cf96nUQrYg8xuoZWLQozU5zGW Sun Feb  3 02:50:53 2013
          18965.82599031 041efebf5d016a68bab214e99b06279a0dc3119a 1NnqM24fFeAGf7NWxmhhFkQAciPqeWo3L Fri Mar 15 05:05:48 2013
          18586.23030373 2360e5bf0181cbc7460d62bea9bbfeb8b532a302 14E4jGTvz1Jfbv4bzkDtieTzYA66x9J7GF Fri Mar 15 06:59:05 2013
          18139.27000000 9d2c456a54afa19be728e10ca807485ce7e76516 1FL488btzV244B5dkCTL6PZruJ9Di7AtT9 Mon Feb 18 22:11:45 2013
          18000.99000000 4595f9ef7188f36874054fa4f37c5d2906ce4bca 17LwHmqMBVEBUpA6LehuMZDoBgWmfJ47a7 Fri Mar  8 17:48:57 2013
          17000.00000000 860aaf7c07b6d1e4f8f6e4f06961f172255e95a5 1DDkM9Tjya1KTiHpMkAuCb7KjyABZnK9Kk Mon Mar 18 08:10:27 2013
          16700.00976300 3e3a114db48c7577746f3852a95e8d1ef9bbe4dd 16g2TW2hbFoov3DThSRBdnETaS94bFvq5v Mon Feb 25 10:54:21 2013
          15900.98000000 13ebd7219155fd73c22e15ef60ac9efbecc40ecb 12pLN7xdGvsuEeJPY1cTrv623qgu4Jq6am Tue Mar 19 15:27:32 2013
          15799.93490000 44906d0d6cfed7992bcacdd761d2feab26a5ee14 17FXxwQ7v35a3nZgKUw5MzoFdB75rxYDrs Tue Jul 17 11:32:39 2012
          15000.00000000 d2c7c672fa0dbbef722022f9a784a896251c7776 1LDWDufjU5ATbozDZY3uChb7oPAbDaiB7K Tue Dec 18 04:31:25 2012
          14999.99000000 bb28f579e758adfa34f93f7945df09ccf383c36e 1J4cRkGP2ZC8Jp3S8BN2gJ7Hu9Xq4nzKzk Fri Feb  8 01:41:49 2013
          14695.08545825 688b16d00c04e046dea092b710029f9fca7573aa 1AXmu2pGHuS67v1BrmRo1MAapFbbJo9QUw Thu Mar 14 23:34:45 2013
          14607.53640361 6209cce9e1d46ba5cc5902dc7fa4187d02c643cf 19wNxkH44gESc4Jrx6URE1gX3ovuhTLDZt Fri Mar 15 07:51:17 2013
          14500.00000000 61926e70674b04af7a1ebb0db8ab732d1f9e3546 19tuxqhzgwC6B9hhLHDLJkocx8LaaCS56s Tue Dec 18 04:56:00 2012
          14432.15502252 63b869e2c61135c5e3ba33bc9e1c0cbf53f1437b 1A6GpGtUEstGWE3kfRHLWvQfRkxbcaFP1b Thu Mar 14 00:37:52 2013
          14286.87000000 5ee9d53cebf714a5c27516e9c02f565e0c2871f9 19ere2oJzJh81A5Q64SExDZYz54RvWHqZz Thu Aug  2 18:06:55 2012
          14237.41000000 969f45d0891ff37de3f3bf832e02018479f7a2f1 1EjRAEjDdA7GiCSUkA9nM4771n86N5t2xZ Mon Dec 31 02:01:14 2012
          14032.57823184 d9f0fe384397079a063bc6681b95efdc4946bc44 1LsNL7pa51HzBTFX4kSgTjDowRSekGyWqZ Tue Mar 19 08:45:17 2013
          14000.00000000 b7cef1ba2cd36a7f4b4aa2addeb7e1469b781d2a 1HktZquxWcseRTkkSTPWSVtL2Cfdhus2sj Sun Jan 20 04:51:07 2013
          13437.11638034 f03ae2ba76ca642a7f073bd6aad526d57531aea1 1NuDiVDgBx2rx3gwoRJRERkPkSLNksubMK Sat Dec  1 01:23:55 2012
          13091.56400000 a977facb29468996215d3cf5fdce26dd79adb2e3 1GT4vkeCSeMQXhzsvAnZE82akeg9xP4dfa Tue Mar 19 16:20:53 2013
          13050.00000000 cb24c764c73cefdae506160af6e15cd2bef42ca9 1KX8EPDcziwbGaC7oDHDuKE9SfLWMmmbZy Wed Sep 14 15:13:08 2011
          13006.93000000 7f2bab9b1573d79e2094a8348039ac9feb2b4524 1CbR8da9YPZqXJJKm9ze1GYf67eKAUfXwP Wed Mar 20 00:39:58 2013
          12950.00000000 de87db533ba55a9a81eb6c5cc9a0c180a541d7f0 1MHdm5XZMrfoZFoUktEaGhYevmdiXoc4x4 Mon Oct 17 23:32:56 2011
          12502.20485722 932687a2724684e5e84a410405c1204ee6b2a2c7 1ER4VJHiANWLnFPmuVpSqccj3DejdAhz7a Sat Mar 16 09:27:27 2013
          12039.14901727 452af036d954da467aabb8f9d981da1e3d86dd84 17Jj4eNGBUEdBJEorViEieZ8W87ELXKgu7 Tue Feb 26 20:30:43 2013
          12017.73630423 7d6c57ded3113a739cdaf4883f7dce63d29b8792 1CSBFoN2ANwqXeuQ9daVQYHXoXVfqEtzfa Tue Mar 19 15:27:32 2013
          12009.05131474 61dfa94b9a89c38fbeabcd4fd4a72803e379f761 19vWUsLH7G6yQH484r3n1GodLEoLivWHJg Mon Feb 25 12:38:11 2013
          11800.00000000 8b31ad3d20f30bb2f70fb4244b3cbcd1e7edc06b 1DgzSGFprGG4CcxdZPHeidSG7TKbgrATYx Fri Jul 13 19:18:34 2012
          11500.00000000 4ee958365b621aa48c08483181f44a2411114543 18CFF2eVGX4LkJL5b4Sq8hXffwnsHJorvH Thu Mar 14 03:59:07 2013
          11381.88580800 bf3b7ee219fc90e6ecb145811348d5debdb2cdcf 1JS9LUCe3JgsFbSajHd59soHFvVhg7v4uE Wed Mar  6 03:58:42 2013
          11350.00000000 aa25a295f083545bbfe83dfeabb92524bed48aeb 1GWexYYJtPbNRAKPndLwedtLK1yuDUjUeX Tue Jan 31 20:42:17 2012
          11226.62100000 66373d4bf239beab214943b74dc8100988e5855a 1AKU6fsr5amt3XAvxaYoCPDe8vkhrfk4WU Wed Mar 13 20:54:56 2013
          11102.90000000 84b5dc6f658300051ee6bf5b62f11f2cfeb44b61 1D6i4FY4iJ3M54QJ8XyUn3LcWsWR84V8gU Fri Nov  2 18:14:08 2012
          11100.00000000 de8cb1cb1e8224759636c83e0fd1623411579ea1 1MHjZDJ6yGwAPAFoT76W3jkunxCagqFrog Wed Mar  6 11:34:46 2013
          10995.87504322 eb40e5ad2c136ae0d9d4124618ba0b52b66c9e02 1NSuYDTfkzKoYw4FuBTXpHv3XGWXeCjE4T Sat Mar  9 14:18:25 2013
          10865.03388285 44630220152a3de2050f3d29fdbe75b2b244f9d4 17EbZGC1uZAGayTPdHEPrCQcw9Sq8qqt13 Fri Mar  1 09:09:24 2013
          10770.51520822 99f5a0e164433f005dc85fd331aa7c46d2d4f419 1F34duy2eeMz5mSrvFepVzy7Y1rBsnAyWC Mon Aug  8 22:14:47 2011
          10689.03444187 a29db8c9ca761e2ff30c3b0bf49f7bc83cc4e5a4 1FpqQnKQCgDkJFMC94JL8FpRyHTZ3uRVZ1 Sat Jul 30 14:55:26 2011
          10398.36612775 23009d0b605b3254dd435341ebbff7c23ca9e046 14C5PLasPWXhPjK4jXkYWDmDMhuJXp2jVu Mon Mar  4 17:40:33 2013
          10009.25101000 0730733b14f38b9ffd71c7af91d5bd42f6f91eee 1f1miYFQWTzd
