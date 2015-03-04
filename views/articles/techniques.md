#Techniques

Machine learning is a subfield of computer science originating from research into artificial intelligence. It explores the construction and study of algorithms that can learn from data. Such algorithms operate by building a model from example inputs and using that to make predictions or decisions, rather than following strictly static program instructions.
[wikipedia](http://en.wikipedia.org/wiki/Machine_learning)

1. SUPPORT VECTOER REGRESSION (for regression)
We present a support vector regression (SVR) based music emotion recognition system. The recognition process consists of three steps: (i) seven distinct features are extracted from music; (ii) those features are mapped into eleven emotion categories on Thayer’s two-dimensional emotion model; (iii) two regression functions are trained using SVR and then arousal and valence values are predicted. In the model, the amount of arousal and valence is measured along the vertical and horizontal axis, respectively.
Secondly, we adopt support vector regression as a classifier to train two regression functions for predicting arousal and valence values based on the low-level features, such as pitch, rhythm and tempo, extracted from music.
For training our emotion classifier, we need two distinct
SVR functions. One is for training an arousal value and the other is for a valence value. The training is performed by the musical features of songs as input and the centre values of each music emotion as the desired output.
[www.cs.cmu.edu/...](http://www.cs.cmu.edu/~rbd/papers/emotion-ismir-09.pdf)
  -	Needs a plane to place emotion
  -	(Regression) function for prediction
  -	Use information retrieved/musical features (scale, average energy, rhythm, harmonics) to put in plane
  -	Some mistakes due to similarity of emotion

2. SUPPORT VECTOR MACHINE (for classification)
3. NEURAL NETWORK (to confirm)
4. Gaussian Mixture Model (for classification)
