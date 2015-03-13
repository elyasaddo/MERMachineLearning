# Techniques

### Introduction

Machine learning is a subfield of Computer Science originating from research into artificial intelligence. It explores the construction and study of algorithms that can learn from data. Such algorithms operate by building a model from example inputs and using that to make predictions or decisions, rather than following strictly static program instructions[^1].

It plays an important role in MER as it is with Machine Learning (ML) that the computer predicts the emotions we feel depending on the music. There exist many techniques, which each have their own pros and cons. However as ML is a relatively new science they are not all very effective, and even the most effective techniques are not extremely reliable.

We have chosen to study three techniques of ML applied to MER:  Support Vector Regression (SVR), Support Vector Machine (SVM) and Neural Network. We chose these techniques to cover all MER by classification and by regression.

### Support Vector Regression ### {#SVR}

The SVR based music emotion recognition consists of three steps:


1. Extraction of music features such as the overall energy of the music, the rhythm and harmonics.
2. These features and their combination must then be mapped into emotion categories on a plane; this technique quantifies emotions.
3. Find regression functions that will enable the mapping of the music to a category, i.e. placing it on the plane. When a piece is playing, the computer will retrieve the musical features, then use the regression functions that take these features as inputs, to output the emotion as coordinates (in the form of a vector) of a plane.


SVR was used in an experiment in 2009 supervised by Byeong-jun Han, Seungmin Rho, Roger B. and Dannenberg Eenjun Hwang[^2]. The plane they used was Thayer’s two-dimensional emotional pane which evaluate the valence of an emotion on the x–axis and its arousal on the y–axis. They chose to extract seven music features such as scale, intensity, rhythm and harmonics and selected 165 various music pieces for their experiment.  

<figure markdown="1">
![Thayer's two-dimensional emotion plane](/assets/images/VADiagram.png)
<figcaption markdown="1">
  Figure 2.1: Thayer's two-dimensional emotion plane. Adapted from: Russell, J. A. (1980). A circumplex model of affect. Journal of Personality and Social Psychology, 39, 1161–1178.
</figcaption>
</figure>

These features were then used as input for the regression functions; both Cartesian and polar coordinates were used as outputs:

1. In case of Cartesian representation, the emotion of a song can be represented by (a, v), where *a* denoting arousal and *v* denoting valence and their ranges are *a* ∈ [-1,1] and *v* ∈ [-1,1].
2. In case of polar representation assume that *Emotion<sub>c</sub>* and *Emotion<sub>p</sub>* represent an emotion in Cartesian and polar coordinate systems, respectively. We can calculate the distance and angle values of each emotion and transfer the coordinate system from Cartesian to polar using simple mathematical equations.
Why use both forms? Well they found out that for the emotions that were hard to differentiate, using Cartesian form gave misclassifications. For example, “Peaceful” and “Bored” were misclassified into the “Calm” on the AV plane. The results they had using polar coordinates were much more accurate as you can see with the following table:

<figure markdown="1">
Coordinate type           | Accuracy
--------------------------| -------------
Cartesian                 | 63.03%             
Polar                     | 94.55%
<figcaption markdown="1">
Figure 2.2: Table comparing accuracy of SVR using Polar and Cartesian forms[^2]
</figcaption>
</figure>


They also compared the accuracy of SVR with classification ML techniques such as Gaussian Mixture Model (GMM) and Support Vector Machine (SVM) to try and see which was more effective. These are the results they got:

<figure markdown="1">
Technique       | Coordinate type  | Accuracy
----------------| ---------------- | --------------
SVR             | Cartesian        | 63.03%
SVR             | Polar            | 94.55%
SVM             | Cartesian        | 32.73%
GMM             | Cartesian        | 91.52%
GMM             | Polar            | 92.73%
<figcaption markdown="1">
Figure 2.3: Table of different techniques used for experience and their accuracy[^2]
</figcaption>
</figure>

Misclassifications still occurred as we can see, partly due to the fact that some emotions are too hard to differentiate for a computer (even for us sometimes) such as sleepy, sad, anger, etc. It also is interesting to notice that in general, use of polar coordinates results in a better accuracy of emotion recognition (i.e. misclassifications are significantly reduced).

### Support Vector Machine ### {#SVM}

The support vector machine is a supervised classification system that minimises an upper bound on its expected error. It attempts to find the hyper-plane separating two classes of data that will generalise best to future data.


### Neural Network ### {#NN}

Neural Networks imitates the activity of our biological nervous system. It associates attributes and characteristics of data to emotions amongst other things. For example, certain colours are associated with certain emotions (brightly coloured paintings are usually associated with joy and happiness whereas dark-coloured paintings are associated with sadness, fear, etc.). The principle of this technique is illustrated with the image below. A certain number of inputs are used. These inputs are then analysed by the computer with “tools” that class the information given: the hidden layers. Each input now has a “weight” associated with the hidden layer. The hidden layers with the most weight have a greater activity level. The activity level of each layer then determines the output[^3]. Although neural networks have been applied extensively in domains such as object recognition, speech and text recognition, they have been relatively underutilized in music cognition and music informatics. 

<figure markdown="1">
![Neural Network schema](/assets/images/NeuralNetworkSchema.jpg)
<figcaption markdown="1">
  Figure 2.4: Neural Network schema[^3]
</figcaption>
</figure>


In MER application, the hidden layers correspond to music features. You also need a set of data beforehand for the computer to work with (i.e. data that depending on the activity of the features outputs the corresponding emotion). It is also necessary to find a concrete way to represent emotions. Usually researchers will use coordinates with x-axis representing some general aspect of emotion and y-axis another aspect of emotion such as valence and arousal.
Just like your nervous system associates musical attributes to certain emotions (high energy music, fast rhythm&hellip; &rarr; agitated; slow rhythm, no energy, long sound opposed to short, brief sounds &rarr; sad&hellip;), the neural network does the same thing.

Naresh N. Vempala and Frank A. Russo led an experimentof MER using Neural Network. They conducted a network that predicted the emotion for the entire music. Twelve music experts were used to give the emotions they felt whiles listening to pieces. The data that was retrieved was then used as the "actual" emotion of the song even though emotions are subjective. Then thirteen music features were extracted used as inputs and hidden layers  and the ouputs were again AV coordinates (because it is an simple way to represent emotions) as shown on the image below. It is also important to note that he wight between input units and hidden layers and between hidden layers and outputs were set to random numbers close to 0. 

<figure markdown="1">
![Neural Network schema](/assets/images/NN_explanation.png)
<figcaption markdown="1">
  Figure 2.4: Neural Network of the Experience[^4]
</figcaption>
</figure> 

Inputs were passed through a sigmoidal function, multiplied with the connection weights *W<sub>hi</sub>*, and summed at each hidden unit. Hidden unit values were obtained by passing the summed value at each hidden unit through a sigmoidal function. These values were multiplied with the connection weights *W<sub>oh</sub>*, summed at each output unit, and passed through a sigmoidal function to arrive at the final output value for each output unit. Network outputs were compared to desired outputs and the error was computed. The machine then computed the weight changes that had to be done. At the end, connection weights were updated with the sum of all stored weight changes. 

This is the final result of the experiment: 

<figure markdown="1">
![Neural Network schema](/assets/images/NNresult1.png)
<figcaption markdown="1">
  Figure 2.5: Result of experiment[^4]
</figcaption>
</figure> 

We can see from the graph that overall, Neural Networks accurately predict emotions. However Stravinsky "actual" emotions and predicted emotions are quite far off. What could be done is to create a Neural Network for each music attribute and then use the ones that contribute the most to the AV prediction. 

### Conclusion

*[ML]: Machine Learning
*[MER]: Music Emotion Recognition
*[SVR]: Support Vector Machine
*[GMM]: Gaussian Mixture Model
*[AV]: Arousal Valence

### References

[^1]: Wikipedia (2015) Machine Learning [Online] Available from: <a href="http://en.wikipedia.org/wiki/Machine_learning" TARGET="_blank">http://en.wikipedia.org/wiki/Machine_learning</a>  

[^2]: Byeong-jun Han, Seungmin Rho Roger and B. Dannenberg Eenjun Hwang (2009) SMERS: Music Emotion Recognition using Support Vector Recognition [Online] Available from:[ http://www.cs.cmu.edu/~rbd/pap&hellip;](http://www.cs.cmu.edu/~rbd/papers/emotion-ismir-09.pdf)

[^3]: Christos Stergiou and Dimitrios Siganos (-) Neural Networks [Online] Available from: [http://www.doc.ic.ac.uk/~nd/surprise_96/journal/vol4/cs11/repo&hellip;](http://www.doc.ic.ac.uk/~nd/surprise_96/journal/vol4/cs11/report.html#What%20is%20a%20Neural%20Network)

[^4]: Naresh N. Vempala and Frank A. Russo (2012) Predicting Emotion from Music Audio Features Using Neural Networks [Online] Available from:[ http://www.cmmr2012.eecs.qmul.ac.uk/sites/cmmr2012.eec&hellip;](http://www.cmmr2012.eecs.qmul.ac.uk/sites/cmmr2012.eecs.qmul.ac.uk/files/pdf/papers/cmmr2012_submission_66.pdf )
