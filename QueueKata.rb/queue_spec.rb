require './queue.rb'

describe "queue" do
  it "new queue is empty" do
    queue = Queue.new()
    expect(queue.empty()).to eq(true)
  end
  it "is not empty when an item is push" do
    queue = Queue.new()
    queue.push(1)
    expect(queue.empty()).to eq(false)
  end
  it "return an item" do
    queue = Queue.new()
    queue.push(1)
    expect(queue.pop).to eq(1)
  end
end
