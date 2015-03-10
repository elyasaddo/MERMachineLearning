# Techniques

### Introduction
Machine learning is a subfield of Computer Science originating from research into artificial intelligence. It explores the construction and study of algorithms that can learn from data. Such algorithms operate by building a model from example inputs and using that to make predictions or decisions, rather than following strictly static program instructions[^1].

It plays an important role in MER as it is with Machine Learning (ML) that the computer predicts the emotions we feel depending on the music. There exist many techniques, which each have their own pros and cons. However as ML is a relatively new science they are not all very effective, and even the most effective techniques are not extremely reliable.

We have chosen to study three techniques of ML applied to MER:  Support Vector Regression (SVR), Support Vector Machine (SVM) and Neural Network. We chose these techniques to cover all the possible ways to recognise emotions produced by music: classification/regression and time-continuous/non time-continuous.


### Support Vector Regression

The SVR based music emotion recognition consists of three steps:

1. Extraction of music features such as the overall energy of the music, the rhythm and harmonics.
2. These features and their combination must then be mapped into emotion categories on a plane; this technique quantifies emotions.
3. Find regression functions that will enable the mapping of the music to a category, i.e. placing it on the plane. When a piece is playing, the computer will retrieve the musical features, then use the regression functions that take these features as inputs, to output the emotion as coordinates (in the form of a vector) a plane.


Talk about experiment of [^2]

<figure markdown="1">
![Thayer's two-dimensional emotion plane](/assets/images/Thayer's-two-dimensional-diagram.png)
<figcaption markdown="1">
  Figure 2.1: Thayer's two-dimensional emotion plane
</figcaption>
</figure>

### Support Vector Machine

The support vector machine is a supervised classification system that minimises an upper bound on its expected error. It attempts to find the hyper-plane separating two classes of data that will generalise best to future data.

### Neural Network

Neural Networks imitates the activity of our biological nervous system. It associates attributes and characteristics of data to emotions amongst other things. For example, certain colours are associated with certain emotions (brightly coloured paintings are usually associated with joy and happiness whereas dark-coloured paintings are associated with sadness, fear, etc.). The principle of this technique is illustrated with the image below. A certain number of inputs are used. These inputs are then analysed by the computer with “tools” that class the information given: the hidden layers. Each input now has a “weight” associated with the hidden layer. The hidden layers with the most weight have a greater activity level. The activity level of each layer then determines the output[^3].

<figure markdown="1">
![Neural Network schema](/assets/images/NeuralNetworkSchema.multil.png)
<figcaption markdown="1">
  Figure 2.2: Neural Network schema
</figcaption>
</figure>

In MER application, the hidden layers correspond to music features. You also need a set of data beforehand for the computer to work with (i.e. data that depending on the activity of the features outputs the corresponding emotion). It is also necessary to find a concrete way to represent emotions. Usually researchers will use coordinates with x-axis representing some general aspect of emotion and y-axis another aspect of emotion such as valence and arousal.
Just like your nervous system associates musical attributes to certain emotions (high energy music, fast rhythm&hellip; &rarr; agitated; slow rhythm, no energy, long sound opposed to short, brief sounds &rarr; sad&hellip;), the neural network does the same thing.

Explain with 2 examples of drawn network with this table how the computer will output representation of the emotion stimulated by music.

This form of neural network does not take in to account the fact that emotion can change throughout a song. Elman neural networks do, however; they utilise the previous time-step context (previous activity of hidden layers). This means that the pieces of music have to be divided into sub-pieces of equal length so the neural network can take into account the previous emotion. This is important because, say a piece of music is sad overall but had some peaceful moments, the previous method would have simply suggested that the piece is sad. This new method’s output should express the existence of the peaceful emotive section as well as the overall sad emotion.  In doing this, the current hidden layer’s activity can be compared to the old one’s to determine if the piece changes the emotion it’s invoking.

Talk about research[^4]

### Conclusion

*[ML]: Machine Learning
*[MER]: Music Emotion Recognition

## References

[^1]: Wikipedia (2015) Machine Learning [Online] Available from: <a href="http://en.wikipedia.org/wiki/Machine_learning" TARGET="_blank">http://en.wikipedia.org/wiki/Machine_learning</a>  

[^2]: Byeong-jun Han, Seungmin Rho Roger and B. Dannenberg Eenjun Hwang (2009) SMERS: Music Emotion Recognition using Support Vector Recognition [Online] Available from: <a href="http://www.cs.cmu.edu/~rbd/papers/emotion-ismir-09.pdf" TARGET="_blank">http://www.cs.cmu.edu/~rbd/papers/emotion-ismir-09.pdf</a> 

[^3]: Christos Stergiou and Dimitrios Siganos (-) Neural Networks [Online] Available from: <a href="http://www.doc.ic.ac.uk/~nd/surprise_96/journal/vol4/cs11/report.html#What%20is%20a%20Neural%20Network" TARGET="_blank">//www.doc.ic.ac.uk/~nd/surprise_96/journal/vol4/cs11/report.html#What%20is%20a%20Neural%20Network</a> 

[^4]: Naresh N. Vempala and Frank A. Russo (2012) Predicting Emotion from Music Audio Features Using Neural Networks [Online] Available from: <a href="file:///Users/florian_emile/Documents/cmmr2012_submission_66.pdf" TARGET="_blank">file:///Users/florian_emile/Documents/cmmr2012_submission_66.pdf</a> 
