# Summary
<hr>
### Introduction
On this website we have discussed various Machine Learning (ML) techniques, such as: Support Vector Machines (SVM), Support Vector Regression (SVR) &amp; Neural Networks (NN) ([Techniques](techniques)), as well as Linear Regression and Fuzzy k&mdash;Nearest Neighbour (on [Regression](regression) &amp; [Classification](classification) respectively). In this section we will take a look at which of these methods, if any, stand out from the rest in terms of accuracy, the number of observations in needs to make a reasonable prediction, how well they help with Music Emotion Recognition (MER) in particular et al.

Before going ahead with the conclusions, it should be pointed out that ML is most definitively a much more effective method of establishing the emotion of a piece of music. While humans can *very* accurately say what the emotion of a piece of music is quickly, and can do this at any stage of the piece, we can only do it for small number of samples. When you need 1,000 samples analysing, humans will begin to slow down, take breaks and become restless. This human behaviour will result in a gradual loss of precision in the answers given. For this reason machines are better suited for the sheer quantity of data we want to handle when carrying out these studies.

### Comparisons
We shall begin by looking at accuracy of the methods. Recall from the [techniques](techniques) page [Fig. 5.1](#Fig51). From this table it seems that Gaussian Mixture Models (GMM) is very accurate - though still incorrectly identifying 1-in-10.

<figure markdown="1">
#### Accuracy #### {#Fig51}
Technique         | Accuracy
----------------- | --------------
SVR               | 78.8%
SVM               | 60.5%
**GMM**           | **92.1%**
Neural Network    | 85.6%
KNN               | 38.9%
Linear Regression |
<figcaption markdown="1">
  Figure 5.1: Comparative Table of Various ML Techniques Applied in MER
</figcaption>
</figure>

From the table we can see that NN's accuracy is not too dissimilar from GMM's, ~7% less accurate. However, when used in combination GMM and NN create both an accurate and computationally efficient process for emotional taxonomy[^1]. One additional note is that by only verifying and subset of the data when using GMM you can further *significantly* reduce the computational cost[^1].

The issue with some of these methods, however, is that the output is a vector; most commonly a Valence and Arousal value, from the Thayer's 2D emotional plane. This is difficult for humans to understand, for this reason it can be argued that [classification](classification) is preferable to [regression](regression) as when used in applications the user can directly and instinctively know what the output means, viz. out of "Sad" and "(-0.6, -0.25)", "Sad" is instantly more recognisable.

[Below](#Fig52) is a table showing the various ML techniques and to what sort of problem each technique is best suited.

<figure markdown="1">
#### Techniques and Problems #### {#Fig52}
Technique         | Problem
----------------- | --------------
SVR               |  
SVM               | Binary classification
GMM               |
Neural Network    |
KNN               |  
Linear Regression | Works well for speech recognition, especially helpful for identifying&nbsp;lyrics
<figcaption markdown="1">
  Figure 5.2: Comparative Table of Various ML Techniques and problems in MER
</figcaption>
</figure>

### Other Machine Learning Techniques

Fuzzy labelling appears to be a promising method of emotional taxonomy. It offers both the advantages of being able to offer output that can be easily understood by humans as well as the psuedo-continuous nature of the output lending itself nicely to being ordered. This orderable property of the output means when used in applications it offers up alternatives. In the majority of cases the top result will correlate with the users opinion, however the other [30%](classification#FKNN) of the time it may be one of the other outputs offered by the machine; meaning you reduce the *apparent* error, due to [Miscommunication](regression#MisC) &amp; [Psychological Impact](regression#PsyI), that the end user perceives because of their personal tastes and experiences. While there is further work to be done on the Fuzzy K-Nearest Neighbour (FKNN) ML technique, before it has similar accuracy levels as something like SVM &amp; GMM, it still has potential to be a strong candidate if incorporated into applications. This is similarly true for other fuzzy ML techniques such as Fuzzy Nearest-Mean which actually has a slightly better accuracy of 78.33%[^2].

### Conclusion

On this website, we have discussed Machine Learning and how it aids Music Emotion Recognition in establishing the emotion/mood of a song segment. We've looked at how these ML techniques can overcome several problems including: human perception by looking into [fuzzy labelling](classification#FKNN), generating accurate results from very little data by learning from similar examples it has seen previously using [active learning](regression#ActLearning), and detecting changes in emotion throughout the course of a song using [time-continuous regression](regression#TimeCont).

<!--
- Potential Machine Learning techniques that haven't been used a great deal, but may be useful in solving certain problems
  - GMM
  - Decision Tree Learning
  - K-Nearest Neighbours

-->
### References

[^1]: Bing Xiang, and Berger, T. (2003). Efficient text-independent speaker verification with structu&shy;ral gaussian mixture models and neural network. IEEE Transactions on Speech and Audio Processing, [online] 11(5), pp.447-456. Available at: [http://ieeexplore.ieee.org/xpls/abs_all&hellip;](http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=1223594&tag=1) [Acc&shy;essed 16 Mar. 2015].

[^2]: Yang, Y., Liu, C. and Chen, H. (2006). Music emotion classification. Proceedings of the 14th annual ACM international conference on Multimedia - MULTIMEDIA '06. [online] Available at: [http://delivery.acm.org/10.1145/11&hellip;](http://delivery.acm.org/10.1145/1190000/1180665/p81-yang.pdf?ip=129.31.74.197&id=1180665&acc=ACTIVE%20SERVICE&key=BF07A2EE685417C5%2EF5014A9D3D5CC2D9%2E4D4702B0C3E38B35%2E4D4702B0C3E38B35&CFID=640746836&CFTOKEN=80988680&__acm__=1426551374_0a116eecd6560832218d5b22b6b2c4dd) [Accessed 17 Mar. 2015].

*[ML]: Machine Learning
*[GMM]: Gaussian Mixture Model
*[SVR]: Support Vector Regression
*[MER]: Music Emotion Recognition
*[SVM]: Support Vector Machine
*[LR]: Linear Regression.
