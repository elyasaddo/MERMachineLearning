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
### Introduction

Over the last decade the availability of music has increased dramatically. Gone are the days of hovering over the record button on a tape deck to record this week's hits from the radio, nowadays people can have multiple music libraries synced across multiple devices sometimes using multiple applications. Due to the increased public use of music applications the research in the music field has also increased in the last few years, not only into the applications but into how we can use machines to automate the laborious, expensive work humans would otherwise have to do. Although the techniques aren't perfect yet users are starting to see the research appear in everyday applications, iTunes has &lsquo;Genius&rsquo;, Rdio has a &lsquo;Browse&rsquo; by feeling or mood section and there are countless more examples to add to the list. On this website we will talk about the techniques used to allow these new features to be used by users, but more specifically how we can use machines to do our work, and not only that but act&shy;ually take a small amount of data and use all of its previous efforts to make increasingly more accurate predictions.

<!-- History -->
Music Emotion Recognition (MER) has stemmed from a group of research called Music Information Retrieval (MIR) which is a rapidly expanding community spanning across a myriad of disciplines including: information science, musicology, audio engineering, computer science and business[^1] [^2]. MER has been identified as a &ldquo;powerful&rdquo; way of organising the sheer amount of ever increasing music information in a way that can be easily accessed[^2], and to be able to accurately categorise this musical information we need to have a machine that is capable of processing the volume of information that gets created everyday; it would be simply too much work for humans to do. This is where applying the Machine Learning (ML) models to the MER processes comes in.

<!-- Techniques and problems -->
On this website we will cover two of the most common MER processes *[Classification](articles/classification)* &amp; *[Regression](articles/regression)*. We will also discuss three ML methods on the  *[Techniques](articles/techniques)* page: Support Vector Regression (SVR), Support Vector Machines (SVM) &amp; Neural Networks. SVR works by taking the musical properties, such as harmonics & rhythm etc. and maps them onto a Valence-Arousal Diagram (See [Fig. 1.1](#Fig11))

#### Valence-Arousal Diagram #### {#Fig11 .center}
<figure markdown="1">
![Thayer's two-dimensional emotion plane](/assets/images/VADiagram.png)
<figcaption markdown="1">
  Figure 1.1: Adapted from: Russell, J. A. (1980). A circumplex model of affect. Journal of Personality and Social Psychology, 39, 1161–1178.
</figcaption>
</figure>

*[MER]: Music Emotion Recognition
*[MIR]: Music Information Retrieval
*[ML]: Machine Learning
*[SVM]: Support Vector Machines
*[SVR]: Support Vector Regression

### References

[^1]: Downie, J. Stephen. *"Music information retrieval."* Annual review of information science and technology 37, no. 1 (2003): 295-340.

[^2]: Yang, Yi-Hsuan, Yu-Ching Lin, Ya-Fan Su, and Homer H. Chen. *"A regression approach to music emotion recognition."* Audio, Speech, and Language Processing, IEEE Transactions on 16, no. 2 (2008): 448-457.
