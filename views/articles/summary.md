# Summary

On this website we have discussed various Machine Learning (ML) techniques, such as: Support Vector Machines (SVM), Support Vector Regression (SVR) &amp; Neural Networks (NN) ([Techniques](techniques)), as well as Linear Regression and Fuzzy k&mdash;Nearest Neighbour (on [Regression](regression) &amp; [Classification](classification) respectively). In this section we will take a look at which of these methods, if any, stand out from the rest in terms of accuracy, the number of observations in needs to make a reasonable prediction, how well they help with Music Emotion Recognition (MER) in particular et al.

Before going ahead with the conclusions, it should be pointed out that ML is most definitively a much more effective method of establishing the emotion of a piece of music. While humans can *very* accurately say what the emotion of a piece of music is quickly, and can do this at any stage of the piece, we can only do it for small number of samples. When you need 1,000 samples analysing humans will begin to slow down, take breaks and become restless. This human behaviour will result in a gradual loss of precision in the answers given. For this reason machines are better suited for the sheer quantity of data we want to handle when carrying out these studies.

We shall begin by looking at accuracy of the methods. Recall from the [techniques](techniques) page [Fig. 5.1](#Fig51). From this table it seems that Gaussian Mixture Models (GMM) is very accurate - though still incorrectly identifying 1-in-10.

<figure markdown="1">
#### Accuracy #### {#Fig51}
Technique       | Accuracy
----------------| --------------
SVR             | 78.8%
SVM             | 60.5%
**GMM**         | **92.1%**
Neural Network  | 85.6%
KNN[^7]         | 38.9%
<figcaption markdown="1">
  Figure 5.1: Comparative Table of Various ML Techniques Applied in MER
</figcaption>
</figure>

From the table we can see that NN's accuracy is not too dissimilar from GMM's, ~7% less accurate. However, when used in combination GMM and NN create both an accurate and computationally efficient process for emotional taxonomy[^1]. One additional note is that by only verifying and subset of the data when using GMM you can further *significantly* reduce the computational cost[^1].

The issue with some of these methods, however, is that the output is a vector; most commonly a Valence and Arousal value, from the Thayer's 2D emotional plane. This is difficult for humans to understand, for this reason it can be argued that [classification](classification) is preferable to [regression](regression) as when used in applications the user can directly and instinctively know what the output means, viz. out of "Sad" and "(-0.6, -0.25)", "Sad" is instantly more recognisable.

Within classification: 
<!--
- Potential Machine Learning techniques that haven't been used a great deal, but may be useful in solving certain problems
  - GMM
  - Decision Tree Learning
  - K-Nearest Neighbours

-->
### References

[^1]: Bing Xiang, and Berger, T. (2003). Efficient text-independent speaker verification with structu&shy;ral gaussian mixture models and neural network. IEEE Transactions on Speech and Audio Processing, [online] 11(5), pp.447-456. Available at: [http://ieeexplore.ieee.org/xpls/abs_all&hellip;](http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=1223594&tag=1) [Acc&shy;essed 16 Mar. 2015].

*[ML]: Machine Learning
*[GMM]: Gaussian Mixture Model
*[SVR]: Support Vector Regression
*[MER]: Music Emotion Recognition
*[SVM]: Support Vector Machine
*[LR]: Linear Regression.
