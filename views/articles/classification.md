#General
 1. Note the subjects are asked to label the emotion
 based on their feelings of what the music sample is
 trying to evoke, rather than the emotion the subjects
 perceive at the test. We must make this distinction
 clear because perceived emotion and evoking emotion
 are not always the same. For example, a person who
 enjoys sorrowful tone might feel pleased when listening
 to sorrowful songs. Since MER is developed to help
 people retrieve music samples through a coordinate in the
 emotion plane, it is more natural and adequate that the AV
 values of a song are correspondent with the evoking emotion.

 2.  German philosopher Friedrich Nietzsche, who said that
 “without music, life would be a mistake”

 Note: Supervised Learning: training data has been correctly labeled
        instead of the machine having to create groups on its own
 Note: Classification provides discrete labels instead of the continuous
        nature of regression.
 Note: Classification problems will exist in one of two classes
        Multi-class can have many discrete classes [Andrew Ng Coursera]

#To Look Up
 - Sigmoid function (theta is column vector of parameters -> transposing
   turns it on its side)
 - Decision boundary (decided by theta {theta decided by training set})
 - Cost function for logistical regression and gradient descent (probably)
   not necessary


#Classification
 2. Traditional
 single-label classification is concerned with learning from
 a set of examples that are associated with a single label λ
 from a set of disjoint labels L, |L| > 1.In multilabel
 classification, the examples are associated with a set of
 labels Y ⊆ L

 3. Multilabel classification methods can be categorized into
 two different groups: i) problem transformation methods (PTMs),
  and ii) algorithm adaptation methods.
  PTMs involve turning a multi-label classification problem into
  1+ single-label classification/ regression problems

  4. {Multi-label} When choosing their data sets, most researchers either
  avoid such images, label them subjectively with the base
  (single-label) class most obvious to them, or consider
  “beach+urban” as a new class. The last method is unrealistic
  in most cases because it would increase the number of
  classes to be considered substantially and the data in such
  combined classes is usually sparse. The "rst two methods
  have limitations as well. For example, in content-based
  image indexing and retrieval applications, it would be more
  difficult for a user to retrieve a multiple-class image (e.g.,
  beach+urban) if we only have exclusive beach or urban labels.
  It may require that two separate queries be conducted
  respectively and the intersection of the retrieved images be
  taken. In a content-sensitive image enhancement application,
  it may be desirable for the system to have di5erent
  settings for beach, urban, and beach+urban scenes. This is
  impossible using exclusive single labels.
  - use of binary vectors
  - In previous work, researchers labeled the multi-label
  data with the one class to which the data most likely
  belonged, by some perhaps subjective criterion. For example,
  the image of hotels along a beach would be
  labeled as a beach if the beach covered the majority
  of the image, or if one happened to be looking
  for a beach scene at the time of data collection. In
  our example, part of the ‘*’ data would be labeled as
  ‘+’, and part would be labeled as ‘x’ (e.g., depending
  on which class was most dominant). We call this
  kind of model MODEL-s (s stands for “single-label” class).

#References
 [1] http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.331.1655&rep=rep1&type=pdf
 [2] http://ismir2008.ismir.net/papers/ISMIR2008_275.pdf
 [3] http://books.google.co.uk/books?hl=en&lr=&id=1bpEifVEi2MC&oi=fnd&pg=PA64&dq=Multi-label+classification:An+overview&ots=WyD83kziKF&sig=P6VHFTT9RycLgfpCDrK0vq5o4hM#v=onepage&q=single-label%20&f=false
 [4] Multi-label (I think for a type of PTM) https://www.rose-hulman.edu/~boutell/publications/boutell04PRmultilabel.pdf
 [5] (greater expansion of methods) https://books.google.co.uk/books?hl=en&lr=&id=Br33IRC3PkQC&oi=fnd&pg=PR3&dq=%5D+R.+Duda,+R.+Hart,+D.+Stork,+Pattern+Classification,+2nd+Edition,+Wiley,+New+York,+2001&ots=2wySQzhbDu&sig=y9BqLIkUho6EhJ00NM_yx-snTxs#v=onepage&q&f=false
 [6] (SVM use) http://link.springer.com/chapter/10.1007%2FBFb0026683#page-1
