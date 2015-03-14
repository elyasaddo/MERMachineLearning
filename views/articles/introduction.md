 <!-- - What is MER?
  - Sub-category of MIR study
  - Define emotion
 - Cover techniques &amp; problems
 - History of MER
  - Disclaimer: New science so not a lot of history
  - What sparked interest
#### Non-Textual Features
  - Schematic of one of the techniques (Flow diagram)
  -->
#### "Without music, life would be a mistake" Friedrich Nietzsche, German philosopher.[^3] #### {.center}

 <br>

Over the last decade the availability of music has increased dramatically.[^5] Gone are the days of hovering over the record button on a tape deck to record this week's hits from the radio, nowadays people can have multiple music libraries synced across multiple devices sometimes using multiple applications. Due to the increased public use of music applications the research in the music field has also increased in the last few years. Research has been focused into applications of MER and also into how we can use machines to automate the laborious, expensive work humans would otherwise have to do. Although the techniques aren't perfect yet users are starting to see the research appear in everyday applications, iTunes has &lsquo;Genius&rsquo;, Rdio has a &lsquo;Browse&rsquo; by feeling or mood section and there are countless more examples to add to the list. On this website we will talk about the techniques used to allow these new features to be used by users. More specifically how we can use machines to do our work, and not only do the work but act&shy;ually take a small amount of data and use all of its previous efforts to make increasingly more accurate predictions.

#### Full MER Process #### {#Fig11 .center}
<figure markdown="1">
![MER Process](/assets/images/MER-Flowchart.png)
<figcaption markdown="1">
  Figure 1.1: Above is the entire process of Music Emotion Recognition, with our concentration, Machine Learning, highlighted in&nbsp;blue.[^6]
</figcaption>
</figure>

<!-- History -->
Music Emotion Recognition (MER) has stemmed from a group of research called Music Information Retrieval (MIR) which has a rapidly expanding community spanning across a myriad of disciplines including: information science, musicology, audio engineering, computer science and business[^1] [^2]. MER has been identified as a &ldquo;powerful&rdquo; way of organising the sheer amount of ever increasing music information in a way that can be easily accessed[^2]. To be able to accurately categorise this musical information we need to have machines that are capable of processing the volume of information that gets created everyday; it would be simply too much work for humans to do. This is where applying the Machine Learning (ML) models to the MER processes comes in.

<!-- Techniques and problems -->
On this website we will cover two of the most common MER processes *[Classification](articles/classification)* &amp; *[Regression](articles/regression)*. We will also discuss three ML methods on the  *[Techniques](articles/techniques)* page: [Support Vector Regression (SVR)](articles/techniques#SVR), [Support Vector Machines (SVM)](articles/techniques#SVM) &amp; [Neural Networks](articles/techniques#NN).

#### Support Vector Regression

Support Vector Regression works by taking the musical properties, such as harmonics & rhythm etc. and maps them onto a Valence-Arousal Diagram (See [Fig. 1.2](#Fig12)). The emotion that has been chosen by the machine is then represented as 2D Vector in the form (a, v).

#### Valence-Arousal Diagram #### {#Fig12 .center}
<figure markdown="1">
![Thayer's two-dimensional emotion plane](/assets/images/VADiagram.png)
<figcaption markdown="1">
  Figure 1.2: Adapted from: Russell, J. A. (1980). A circumplex model of affect. Journal of Personality and Social Psychology, 39, 1161–1178.
</figcaption>
</figure>

#### Support Vector Machines
Support Vector Machines take training data, called *observations*. This data to make better predictions about future data that is given to the machine without ground truths. SVM work by plotting the test vectors in a `n` dimensional set space, where the number of dimensions, `n`, comes from the number of musical features (in this case) taken into consideration; tempo, rhythm, volume, lyrics etc. A hyper-plane is then created to split the data into 2 classifications (`+1` or `-1`), the hyper-plane must create the maximum margin between itself and the closest vectors (*Support Vectors*) on the positive side and the negative side - [Figure 1.3](#Fig13) demonstrates this process. The machine then looks at the data to see if it matches the ground truth and alters a weighting coefficient until the partitioned data matches the ground truth.

#### Creating the Hyperplane #### {#Fig13 .center}
<figure markdown="1">
![Creating the Hyperplane](/assets/images/MER-SVM-Process.gif)
<figcaption markdown="1">
  Figure 1.3: The Process of creating the Hyperplane[^7]
</figcaption>
</figure>


#### Neural Networks

Neural Networks is modelled on our biological nervous system. It works by associating attri&shy;butes and characteristics of the data with the output - in MER that output can be a valence value and an arousal value. The network is set up with an input layer of musical features and a hidden layer of musical features, with weighted associations, `W`<sub>`hi`</sub>,  between the two sets of nodes (resulting in a *directed complete bipartite acyclic graph*). Then joining the hidden layer to the output layer is a another set of weighted associations, `W`<sub>`oh`</sub>. Values are computed by picking initial random values close to 0 and processing them the values at each layer (a combination of passing them through sigmoidal functions, summing the values &amp; multipling by  `W`<sub>`hi`</sub> or `W`<sub>`oh`</sub>).[^4]

<figure markdown="1">
![Neural Network schema](/assets/images/NN_explanation.png)
<figcaption markdown="1">
  Figure 1.4: Neural Network of the Experience[^4]
</figcaption>
</figure>

The output is then compared to the correct values, a backpropagation algorithm is then applied which reduces the errors. The machine is then trained by repeating the above steps, which can be around 10,&nbsp;000 cycles.[^4]


More information on the three methods can be found by reading our *[Techniques](articles/techniques)* page.

*[MER]: Music Emotion Recognition
*[MIR]: Music Information Retrieval
*[ML]: Machine Learning
*[SVM]: Support Vector Machines
*[SVR]: Support Vector Regression

*NB: Top background image adapted from a series of experiments described in Bachorik et al. (2009).*

### References

[^1]: Downie, J. (2003) Music information retrieval. Annual Review of Information Science and Technology. [Online] 37 (1), 295-296. Available from: [http://onlinelibrary.wil&hellip;](http://onlinelibrary.wiley.com/doi/10.1002/aris.1440370108/full) [Accessed: 10 March 2015].

[^2]: Yang, Y., Lin, Y., Su, Y. & Chen, H. (2008) A Regression Approach to Music Emotion Recognition. IEEE Transactions on Audio, Speech, and Language Processing. [Online] 16 (2), 448. Available from: [http://ieeexplore.ieee.org/stamp/sta&hellip;](http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=4432654) [Accessed: 10 March 2015].

[^3]: Trohidis, K., Tsoumakas, G., Kalliris, G. & Vlahavas, I. (2011) Multi-label classification of music by emotion. EURASIP Journal on Audio, Speech, and Music Processing. [Online] 2011 (1), 325-327. Available from: [https://books.google.co.uk/books?hl=en&lr=&hellip;](https://books.google.co.uk/books?hl=en&lr=&id=OHp3sRnZD-oC&oi=fnd&pg=PA325&dq=Multi-Label+Classification+of+Music+into+Emotions.&ots=oELPqJiBg3&sig=Kzh-y51zNuA1AomQzAn8MRffx10#v=onepage&q=Multi-Label%20Classification%20of%20Music%20into%20Emotions.&f=false) [Accessed: 10 March 2015].

[^4]: Vempala, N. and Russo, F. (2012). Predicting emotion from music audio features using neural networks. Proceedings of the 9th International Symposium on Computer Music Modeling and Retrieval (CMMR). [Online] Available at: [http://www.cmmr2012.eecs.qmul.ac.uk/sit&hellip;](http://www.cmmr2012.eecs.qmul.ac.uk/sites/cmmr2012.eecs.qmul.ac.uk/files/pdf/papers/cmmr2012_submission_66.pdf) [Accessed 10 Mar. 2015].

[^5]: Kim, Y., Schmidt, E., Migneco, R., Morton, B., Richardson, P., Scott, J., Speck, J. and Turnbull, D. (2015). Music Emotion Recognition: A State of the Art Review. [Online] Available at: [http://citeseerx.ist.psu.edu/viewdoc/downlo&hellip;](http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.231.7740&rep=rep1&type=pdf) [Accessed 13 Mar. 2015].

[^6]: Adapted from: Figure 1.1 of Schmidt, E. and Kim, Y. (2015). Modeling and Predicting Emotion in Music. [Online] Available at: [http://www.tcnj.edu/~mmi/papers/Paper52.pdf](http://www.tcnj.edu/~mmi/papers/Paper52.pdf) [Accessed 13 Mar. 2015].

[^7]: Adapted from: Moore, A. (2003) Support Vector Machines [Online] Available at: [http://www.cs.cmu.edu/~cga/ai-course/svm.pdf](http://www.cs.cmu.edu/~cga/ai-course/svm.pdf) Slides 5-9
