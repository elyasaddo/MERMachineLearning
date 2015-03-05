# Classification

  "Without music, life would be a mistake" Friedrich Nietzsche, German philosopher.[^2]

## Introduction
### What is a classification problem?

  A classification problem is one in which the data is to be given some discrete label(s) describing their nature in relation to a given situation. In the context of Music Emotion Recognition (MER) this involves giving a piece of music a label or a set of labels in describing which emotion(s) the music is trying to evoke, e.g. confident, cheerful, aggressive. See the MIREX table of 5 clusters of emotional labels[^7]. It is important to note that what the Machine Learning Algorithms want to retrieve the emotion which the piece of music is trying to evoke, rather than the perceived emotion, as listeners may respond to different pieces of music in different way, e.g. a person may be pleased to hear melancholic music if this is the tone of music they enjoy[^1]. A ground truth is the term given to a label which a certain piece of data actually has. the aim of classification techniques is to suggest a high probability (or in a perfect world 'certainty') of the data having this ground truth label. Note that many ground truths can exist for a given data piece.

### Different types of classification

   In general, if a problem is labeled as a classification problem, it means that all elements in the data set should fall into one of two opposing categories, e.g. in the scenario of determining whether it is day or night in a photograph, each photo should be classified as 'day' or 'not day'.[^(8)FIND REF!!] This is clearly not the case for MER as there are so many emotional label for a piece of music to fall under. In this article, four different forms of classification will be discussed which involve a large set of candidate labels:
   - Single-label
   The single-label technique acknowledges the possibility of data belonging to many labels. However, once the algorithm finds labels which it believes the data belongs to, a single label is chosen based on some criterion, e.g. which label has highest calculated probability for this data piece[^4]. The training set of data in this type of classification are associated with one label each.[^2]
   - Multi-class
   Multi-class classification involves creating a label which is the combination of two or more labels in the given set. It is like considering each member of the power set of labels as a possible fit for data, e.g. the set of all possible labels for the colour of a car include: white; black; grey; blue; {white + black}; {black + blue + grey}.[4]
   - Multi-label
   With multi-label classification, the output for the learning algorithm has such a form that it is possible to see if the data is thought to belong to each set. One way of doing this is by outputting a binary vector (sequence of 0s &amp; 1s) which act as flags to indicate if each label fits[FIND REF!!]. There are two types of classification problems: Problem Transformation Methods (PTMs) and Algorithm Adaptation Methods (AAMs). PTMs convert multi-label problem into one or more single-label problems, for which established and efficient algorithms already exist. AAMs take a more direct approach in which it takes a known ML algorithm and enhances it to cope with many labels.[^3]  
   - Fuzzy label
   The purpose of the previous the forms mentioned are to output a definite value for whether data should be given a label or not. A fuzzy label, however, provides the probabilities of the data belonging to each category. The result from running a fuzzy classification algorithm can be thought of as like the binary vector produced in multi-label classification, however the components can be any real number in the interval [0,1]. The non-discrete nature of a fuzzy label can be thought of as the stepping stone to continuous techniques of representing the emotion evoked by a piece of music like regression.[^9]
<!-- don't go too in depth, apart from what strictly ties in with machine learning -->

## Why classification is difficult
Classification is in essence pattern recognition <!-- quote --> 'the act of taking in raw data and making an action based on the "category" of the pattern'.[^5] Although humans clearly have this skill, we often struggle with defining rules for the classification of a particular set of data because it comes so naturally to us. Because of this, machine learning is very useful in classification as rules created are data based and so are more likely to be accurate in determining the nature of the data.[^11] The training set of data does however need to be labeled by a human before a machine can come up with a suitable model for classifying (known as supervised learning); otherwise it will just be trying to partition groups of data with common attributes (unsuprevised learning) which may not result in emotion related connections.[^12]

## How ML helps
<!-- briefly -->
<!-- supervised learning -->

## Use the machine learning models as paragraphs/sections
 <!-- in each section then talk about Single/Multi label multi class and fuzzy labelling -->
 <!-- provide real life studies where the methods have been used, even better if the study used machine learning -->


<!--
#### Non-textual features
 - Table1 comparison of Multi(class vs Label)
 - Animation1 (think about one)
 - Table2 emotional adjectives
-->

### References

<!-- DONT FORGET TO COPY OVER REFERENCES -->

########
<!-- references used -->
<!--1, 2, 3, 4, 5, 7, 8, 9, 11 -->
