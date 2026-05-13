# Naive Bayes Algorithm

![Naive Bayes](https://upload.wikimedia.org/wikipedia/commons/1/1f/Bayes%27_Theorem_MMB_01.jpg)

## What is Naive Bayes?

Naive Bayes is a **supervised machine learning algorithm** mainly used for:

- Classification problems
- Spam detection
- Sentiment analysis
- Text classification
- Medical diagnosis

It is based on **Bayes’ Theorem** and assumes that all features are independent.

---

# Bayes Theorem

$$
P(A|B) = \frac{P(B|A) \times P(A)}{P(B)}
$$

Where:

| Symbol    | Meaning                  |
| --------- | ------------------------ |
| P(A \| B) | Probability of A given B |
| P(B \| A) | Probability of B given A |
| P(A)      | Probability of A         |
| P(B)      | Probability of B         |

---

# Why is it Called “Naive”?

The algorithm assumes:

> Every feature is independent of every other feature.

Example:

If predicting whether a fruit is an apple using:

- Color
- Size
- Taste

Naive Bayes assumes these features are unrelated.

---

# Types of Naive Bayes

## 1. Gaussian Naive Bayes

Used for continuous numerical data.

Examples:

- Height
- Weight
- Temperature

---

## 2. Multinomial Naive Bayes

Used for discrete counts.

Examples:

- Word frequency
- Text classification

---

## 3. Bernoulli Naive Bayes

Used for binary data.

Examples:

- Yes/No
- True/False
- 0/1

---

# Working of Naive Bayes

## Steps

1. Calculate prior probabilities
2. Calculate likelihood probabilities
3. Apply Bayes theorem
4. Choose the class with highest probability

---

# Example — Spam Email Detection

![Spam Detection](https://upload.wikimedia.org/wikipedia/commons/8/89/Email_spam.jpg)

Suppose we have the following dataset:

| Email | Offer | Win | Spam     |
| ----- | ----- | --- | -------- |
| 1     | Yes   | Yes | Spam     |
| 2     | Yes   | No  | Spam     |
| 3     | No    | Yes | Spam     |
| 4     | No    | No  | Not Spam |
| 5     | No    | No  | Not Spam |

Now a new email arrives:

> "Win Offer"

We want to classify it.

---

# Step 1 — Prior Probability

Total emails = 5

Spam emails = 3

Not Spam emails = 2

\[
P(Spam) = \frac{3}{5}
\]

\[
P(NotSpam) = \frac{2}{5}
\]

---

# Step 2 — Likelihood Probability

For Spam:

| Feature | Probability |
| ------- | ----------- |
| Offer   | 2/3         |
| Win     | 2/3         |

For Not Spam:

| Feature | Probability |
| ------- | ----------- |
| Offer   | 0/2         |
| Win     | 0/2         |

---

# Step 3 — Apply Bayes Theorem

For Spam:

\[
P(Spam|Offer,Win)
\]

\[
= P(Spam) \times P(Offer|Spam) \times P(Win|Spam)
\]

\[
= \frac{3}{5} \times \frac{2}{3} \times \frac{2}{3}
\]

\[
= 0.266
\]

For Not Spam:

\[
= \frac{2}{5} \times 0 \times 0
\]

\[
= 0
\]

---

# Final Prediction

Since:

\[
0.266 > 0
\]

The email is classified as:

# ✅ Spam

---

# Fruit Classification Example

![Fruit Classification](https://upload.wikimedia.org/wikipedia/commons/1/15/Red_Apple.jpg)

Dataset:

| Fruit  | Color  | Shape |
| ------ | ------ | ----- |
| Apple  | Red    | Round |
| Banana | Yellow | Long  |
| Apple  | Red    | Round |
| Banana | Yellow | Long  |

New Fruit:

- Red
- Round

Prediction:

✅ Apple

---

# Advantages of Naive Bayes

- Fast and efficient
- Simple to implement
- Works well with large datasets
- Good for text classification
- Requires less training data

---

# Disadvantages

- Assumes feature independence
- Zero probability problem
- Less accurate for complex relationships

---

# Laplace Smoothing

Used to avoid zero probability.

Formula:

\[
P = \frac{Count + 1}{Total + Number\ of\ Classes}
\]

---

# Applications of Naive Bayes

- Email Spam Filtering
- Sentiment Analysis
- Medical Diagnosis
- Recommendation Systems
- News Classification

---

# Comparison with Other Algorithms

| Algorithm     | Speed     | Accuracy | Best For               |
| ------------- | --------- | -------- | ---------------------- |
| Naive Bayes   | Very Fast | Good     | Text data              |
| Decision Tree | Medium    | Good     | Rule-based data        |
| SVM           | Slow      | High     | Complex classification |
| KNN           | Slow      | Medium   | Small datasets         |

---

# Python Example

```python
from sklearn.naive_bayes import GaussianNB
import numpy as np

# Features
X = np.array([
    [1, 1],
    [1, 0],
    [0, 1],
    [0, 0]
])

# Labels
y = np.array([1, 1, 1, 0])

# Create model
model = GaussianNB()

# Train model
model.fit(X, y)

# Predict
prediction = model.predict([[1, 1]])

print(prediction)
```
